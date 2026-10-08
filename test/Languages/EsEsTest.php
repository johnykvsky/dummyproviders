<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\es_ES\EsEsDefinitionPack;
use PHPUnit\Framework\TestCase;

class EsEsTest extends TestCase
{
    public function testNieFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EsEsDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $nie = $generator->nie();
            self::assertMatchesRegularExpression('/^[XYZ]\d{7}[A-Z]$/', $nie);
        }
    }

    public function testCifFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EsEsDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $cif = $generator->cif();
            self::assertMatchesRegularExpression('/^[ABCDEFGHJNPQRSUVW]\d{7}[0-9A-J]$/', $cif);
        }
    }

    public function testCurrency(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EsEsDefinitionPack());

        self::assertSame('EUR', $generator->currencyCode());
        self::assertSame('€', $generator->currencySymbol());
        self::assertSame('Euro', $generator->currencyName());
    }
}
