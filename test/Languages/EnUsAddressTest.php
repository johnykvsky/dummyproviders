<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_US\EnUsDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnUsAddressTest extends TestCase
{
    public function testCityPrefixValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());
        $cityPrefix = $generator->cityPrefix();

        self::assertContains($cityPrefix, ['North', 'East', 'West', 'South', 'New', 'Lake', 'Port']);
    }

    public function testSecondaryAddressFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());
        $secondaryAddress = $generator->secondaryAddress();

        self::assertMatchesRegularExpression('/^(Apt\.|Suite) \d{3}$/', $secondaryAddress);
    }

    public function testStateValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());
        $state = $generator->state();

        self::assertIsString($state);
        self::assertNotSame('', $state);
    }

    public function testStateAbbrFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());
        $stateAbbr = $generator->stateAbbr();

        self::assertMatchesRegularExpression('/^[A-Z]{2}$/', $stateAbbr);
    }
}
