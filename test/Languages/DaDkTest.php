<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\da_DK\DaDkDefinitionPack;
use PHPUnit\Framework\TestCase;

class DaDkTest extends TestCase
{
    public function testPersonCpr(): void
    {
        $generator = DummyGenerator::create()->withProvider(new DaDkDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $cpr = $generator->cpr();
            self::assertMatchesRegularExpression('/^\d{6}-\d{4}$/', $cpr);

            $middleName = $generator->middleName();
            self::assertIsString($middleName);
            self::assertNotEmpty($middleName);
        }
    }

    public function testCompanyCvrAndP(): void
    {
        $generator = DummyGenerator::create()->withProvider(new DaDkDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $cvr = $generator->cvr();
            self::assertMatchesRegularExpression('/^\d{8}$/', $cvr);

            $p = $generator->p();
            self::assertMatchesRegularExpression('/^\d{10}$/', $p);
        }
    }
}
