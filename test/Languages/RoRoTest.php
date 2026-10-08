<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\ro_RO\RoRoDefinitionPack;
use PHPUnit\Framework\TestCase;

class RoRoTest extends TestCase
{
    public function testPersonCnp(): void
    {
        $generator = DummyGenerator::create()->withProvider(new RoRoDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $cnp = $generator->cnp();
            self::assertMatchesRegularExpression('/^[1-9]\d{12}$/', $cnp);
        }
    }

    public function testPhoneNumbers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new RoRoDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $phone = $generator->phoneNumber();
            self::assertMatchesRegularExpression('/^0[237]\d{8}$/', $phone);

            $tollFree = $generator->tollFreePhoneNumber();
            self::assertMatchesRegularExpression('/^08\d{8}$/', $tollFree);

            $premium = $generator->premiumRatePhoneNumber();
            self::assertMatchesRegularExpression('/^09\d{8}$/', $premium);
        }
    }
}
