<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\it_IT\ItItDefinitionPack;
use PHPUnit\Framework\TestCase;

class ItItTest extends TestCase
{
    public function testCodiceFiscale(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ItItDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $cf = $generator->codiceFiscale();
            self::assertMatchesRegularExpression('/^[A-Z]{6}\d{2}[A-Z]\d{2}[A-Z]\d{3}[A-Z]$/', $cf);
        }
    }

    public function testStreetSuffixesAndNames(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ItItDefinitionPack());
        self::assertNotEmpty($generator->streetName());
        self::assertNotEmpty($generator->firstNameMale());
    }

    public function testCurrency(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ItItDefinitionPack());

        self::assertSame('EUR', $generator->currencyCode());
        self::assertSame('€', $generator->currencySymbol());
        self::assertSame('Euro', $generator->currencyName());
    }
}
