<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\lv_LV\LvLvDefinitionPack;
use PHPUnit\Framework\TestCase;

class LvLvTest extends TestCase
{
    public function testPersonIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new LvLvDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $license = $generator->driverLicence();
            self::assertMatchesRegularExpression('/^[A-Za-z]{2}\d{6}$/', $license);

            $passport = $generator->passportNumber();
            self::assertMatchesRegularExpression('/^[A-Za-z]{2}\d{7}$/', $passport);

            $id = $generator->personalIdentityNumber();
            self::assertMatchesRegularExpression('/^\d{6}-\d{5}$/', $id);

            $date = new \DateTime('1995-03-12');
            $idDate = $generator->personalIdentityNumber($date);
            self::assertStringStartsWith('120395-1', $idDate);

            $date2000 = new \DateTime('2005-07-22');
            $idDate2000 = $generator->personalIdentityNumber($date2000);
            self::assertStringStartsWith('220705-2', $idDate2000);
        }
    }
}
