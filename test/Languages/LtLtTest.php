<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\lt_LT\LtLtDefinitionPack;
use PHPUnit\Framework\TestCase;

class LtLtTest extends TestCase
{
    public function testPersonIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new LtLtDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $license = $generator->driverLicence();
            self::assertMatchesRegularExpression('/^\d{8}$/', $license);

            $passport = $generator->passportNumber();
            self::assertMatchesRegularExpression('/^\d{8}$/', $passport);

            $id = $generator->personalIdentityNumber();
            self::assertMatchesRegularExpression('/^\d{11}$/', $id);

            $date = new \DateTime('1988-11-25');
            $maleId = $generator->personalIdentityNumber('male', $date);
            self::assertMatchesRegularExpression('/^3881125\d{4}$/', $maleId);

            $femaleId = $generator->personalIdentityNumber('female', $date);
            self::assertMatchesRegularExpression('/^4881125\d{4}$/', $femaleId);

            self::assertNotEmpty($generator->lastNameMale());
            self::assertNotEmpty($generator->lastNameFemale());
        }
    }

    public function testPhoneNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new LtLtDefinitionPack());

        for ($i = 0; $i < 30; ++$i) {
            $number = $generator->phoneNumber();
            self::assertNotEmpty($number);
            self::assertDoesNotMatchRegularExpression('/^8/', $number);
            self::assertDoesNotMatchRegularExpression('/^\(8/', $number);
        }
    }
}
