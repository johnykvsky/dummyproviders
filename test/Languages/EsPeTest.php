<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\es_PE\EsPeDefinitionPack;
use PHPUnit\Framework\TestCase;

class EsPeTest extends TestCase
{
    public function testPersonDniAndSuffix(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EsPeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $dni = $generator->dni();
            self::assertMatchesRegularExpression('/^\d{8}$/', $dni);

            $suffix = $generator->suffix();
            self::assertSame('Hijo', $suffix);
        }
    }

    public function testCompanyRuc(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EsPeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $rucDefault = $generator->ruc();
            self::assertMatchesRegularExpression('/^20\d{9}$/', $rucDefault);

            $rucLegal = $generator->ruc(false);
            self::assertMatchesRegularExpression('/^20\d{9}$/', $rucLegal);

            $rucNatural = $generator->ruc(true);
            self::assertMatchesRegularExpression('/^10\d{9}$/', $rucNatural);

            self::assertNotEmpty($generator->catchPhrase());
            self::assertNotEmpty($generator->bs());
        }
    }
}
