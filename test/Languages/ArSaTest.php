<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\ar_SA\ArSaDefinitionPack;
use PHPUnit\Framework\TestCase;

class ArSaTest extends TestCase
{
    public function testPersonIds(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ArSaDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $nationalId = $generator->nationalIdNumber();
            self::assertMatchesRegularExpression('/^1\d{9}$/', $nationalId);

            $foreignerId = $generator->foreignerIdNumber();
            self::assertMatchesRegularExpression('/^2\d{9}$/', $foreignerId);

            $id = $generator->idNumber();
            self::assertMatchesRegularExpression('/^[12]\d{9}$/', $id);
        }
    }

    public function testCompanyIdNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ArSaDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $companyId = $generator->companyIdNumber();
            self::assertMatchesRegularExpression('/^700\d{7}$/', $companyId);
        }
    }
}
