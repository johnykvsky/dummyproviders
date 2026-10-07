<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_ZA\EnZaDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnZaTest extends TestCase
{
    public function testPersonIdNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnZaDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $id = $generator->idNumber();
            self::assertMatchesRegularExpression('/^\d{13}$/', $id);

            $licence = $generator->licenceCode();
            self::assertNotEmpty($licence);
        }
    }

    public function testCompanyNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnZaDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $companyNumber = $generator->companyNumber();
            self::assertMatchesRegularExpression('/^\d{4}\/\d{6}\/\d{2}$/', $companyNumber);
        }
    }
}
