<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\kk_KZ\KkKzDefinitionPack;
use PHPUnit\Framework\TestCase;

class KkKzTest extends TestCase
{
    public function testPersonIndividualIdentificationNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new KkKzDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $iin = $generator->individualIdentificationNumber();
            self::assertMatchesRegularExpression('/^\d{12}$/', $iin);

            $date = new \DateTime('1985-06-20');
            $iinDate = $generator->individualIdentificationNumber($date);
            self::assertStringStartsWith('850620', $iinDate);
        }
    }

    public function testCompanyBusinessIdentificationNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new KkKzDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $bin = $generator->businessIdentificationNumber();
            self::assertMatchesRegularExpression('/^\d{12}$/', $bin);

            $date = new \DateTime('2023-04-10');
            $binDate = $generator->businessIdentificationNumber($date);
            self::assertStringStartsWith('2304', $binDate);

            self::assertNotEmpty($generator->company());
            self::assertNotEmpty($generator->companyPrefix());
        }
    }
}
