<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_US\EnUsDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnUsPaymentTest extends TestCase
{
    public function testBankAccountNumberLengthAndFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());

        $bankAccountNumber = $generator->bankAccountNumber();
        self::assertMatchesRegularExpression('/^\d{5,17}$/', $bankAccountNumber);
    }

    public function testBankRoutingNumberHasValidLengthAndChecksum(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());

        $routingNumber = $generator->bankRoutingNumber();

        self::assertMatchesRegularExpression('/^\d{9}$/', $routingNumber);
        self::assertSame((string) $this->calculateCheckDigit(substr($routingNumber, 0, 8)), $routingNumber[8]);
    }

    private function calculateCheckDigit(string $routingPrefix): int
    {
        $sum = (
            7 * ((int) $routingPrefix[0] + (int) $routingPrefix[3] + (int) $routingPrefix[6]) +
            3 * ((int) $routingPrefix[1] + (int) $routingPrefix[4] + (int) $routingPrefix[7]) +
            9 * ((int) $routingPrefix[2] + (int) $routingPrefix[5])
        );

        return (10 - ($sum % 10)) % 10;
    }
}
