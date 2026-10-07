<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\th_TH\ThThDefinitionPack;
use PHPUnit\Framework\TestCase;

class ThThTest extends TestCase
{
    public function testPersonSsnAndSuffix(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ThThDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $ssn = $generator->ssn();
            self::assertMatchesRegularExpression('/^\d{3}-\d{2}-\d{4}$/', $ssn);

            self::assertNotEmpty($generator->suffix());
        }
    }

    public function testPhoneNumberMobileNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ThThDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $mobile = $generator->mobileNumber();
            self::assertMatchesRegularExpression('/^0[689]/', $mobile);
            $digitsOnly = preg_replace('/\s+/', '', $mobile);
            self::assertMatchesRegularExpression('/^0[689]\d{8}$/', $digitsOnly);
        }
    }
}
