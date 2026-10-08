<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\fa_IR\FaIrDefinitionPack;
use PHPUnit\Framework\TestCase;

class FaIrTest extends TestCase
{
    public function testPersonNationalCode(): void
    {
        $generator = DummyGenerator::create()->withProvider(new FaIrDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $code = $generator->nationalCode();
            self::assertMatchesRegularExpression('/^\d{10}$/', $code);

            // Verify checksum
            $sum = 0;
            for ($j = 0; $j < 9; ++$j) {
                $sum += (int) $code[$j] * (10 - $j);
            }
            $rem = $sum % 11;
            $expectedControl = ($rem < 2) ? $rem : 11 - $rem;
            self::assertSame($expectedControl, (int) $code[9]);
        }
    }

    public function testPhoneNumberMobileNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new FaIrDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $mobile = $generator->mobileNumber();
            self::assertMatchesRegularExpression('/^09\d{9}$/', $mobile);
        }
    }
}
