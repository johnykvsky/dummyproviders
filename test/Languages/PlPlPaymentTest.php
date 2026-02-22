<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\pl_PL\PlPlDefinitionPack;
use PHPUnit\Framework\TestCase;

class PlPlPaymentTest extends TestCase
{
    public function testBankValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $bank = $generator->bank();

        self::assertIsString($bank);
        self::assertNotSame('', trim($bank));
    }

    public function testBankAccountNumberDefaultFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $iban = $generator->bankAccountNumber();

        self::assertMatchesRegularExpression('/^PL\d{26}$/', $iban);
    }

    public function testBankAccountNumberRespectsPrefix(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $prefix = '12345678';
        $iban = $generator->bankAccountNumber(prefix: $prefix, countryCode: 'PL');

        self::assertMatchesRegularExpression('/^PL\d{26}$/', $iban);
        self::assertSame($prefix, substr($iban, 4, strlen($prefix)));
    }
}
