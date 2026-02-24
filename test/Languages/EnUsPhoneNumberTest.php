<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_US\EnUsDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnUsPhoneNumberTest extends TestCase
{
    public function testTollFreeAreaCodeValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());
        $areaCode = $generator->tollFreeAreaCode();

        self::assertContains($areaCode, [800, 844, 855, 866, 877, 888]);
    }

    public function testTollFreePhoneNumberFormatAndPrefix(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());

        $phoneNumber = $generator->tollFreePhoneNumber();
        self::assertMatchesRegularExpression(
            '/^(?:\d{3}-\d{3}-\d{4}|\(\d{3}\) \d{3}-\d{4}|1-\d{3}-\d{3}-\d{4}|\d{3}\.\d{3}\.\d{4})$/',
            $phoneNumber
        );

        $digits = preg_replace('/\D/', '', $phoneNumber);
        self::assertNotNull($digits);

        if (strlen($digits) === 11) {
            self::assertSame('1', $digits[0]);
            $prefix = (int) substr($digits, 1, 3);
        } else {
            $prefix = (int) substr($digits, 0, 3);
        }

        self::assertContains($prefix, [800, 844, 855, 866, 877, 888]);
    }

    public function testPhoneNumberWithExtensionFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());

        $phoneNumber = $generator->phoneNumberWithExtension();
        self::assertMatchesRegularExpression(
            '/^(?:\d{3}-\d{3}-\d{4}|\(\d{3}\) \d{3}-\d{4}|1-\d{3}-\d{3}-\d{4}|\d{3}\.\d{3}\.\d{4}) x\d{3,5}$/',
            $phoneNumber
        );
    }

    public function testAreaCodeFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());

        $areaCode = $generator->areaCode();
        self::assertMatchesRegularExpression('/^[2-9]\d{2}$/', $areaCode);
    }

    public function testExchangeCodeRules(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());

        $exchangeCode = $generator->exchangeCode();
        self::assertMatchesRegularExpression('/^[2-9]\d{2}$/', $exchangeCode);

        if ($exchangeCode[1] === '1') {
            self::assertNotSame('1', $exchangeCode[2]);
        }
    }
}
