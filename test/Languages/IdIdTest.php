<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\id_ID\IdIdDefinitionPack;
use PHPUnit\Framework\TestCase;

class IdIdTest extends TestCase
{
    public function testPersonNik(): void
    {
        $generator = DummyGenerator::create()->withProvider(new IdIdDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $nik = $generator->nik();
            self::assertMatchesRegularExpression('/^\d{16}$/', $nik);

            $date = new \DateTime('1990-05-15');

            $nikMale = $generator->nik('male', $date);
            self::assertMatchesRegularExpression('/^\d{6}150590\d{4}$/', $nikMale);

            $nikFemale = $generator->nik('female', $date);
            // female has day + 40 = 55
            self::assertMatchesRegularExpression('/^\d{6}550590\d{4}$/', $nikFemale);
        }
    }

    public function testPersonNamesAndSuffix(): void
    {
        $generator = DummyGenerator::create()->withProvider(new IdIdDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            self::assertNotEmpty($generator->lastNameMale());
            self::assertNotEmpty($generator->lastNameFemale());
            self::assertNotEmpty($generator->lastName());
            self::assertNotEmpty($generator->suffix());
        }
    }
}
