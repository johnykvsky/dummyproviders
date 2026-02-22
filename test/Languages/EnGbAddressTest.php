<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_GB\EnGbDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnGbAddressTest extends TestCase
{
    public function testCityPrefixValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        $cityPrefix = $generator->cityPrefix();

        self::assertContains($cityPrefix, ['North', 'East', 'West', 'South', 'New', 'Lake', 'Port']);
    }

    public function testCountyValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        $county = $generator->county();

        self::assertIsString($county);
        self::assertNotSame('', $county);
    }

    public function testPostcodeValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        $postcode = $generator->postcode();

        self::assertMatchesRegularExpression('/^[A-Z0-9]{1,4} ?[A-Z0-9]{2,4}$/', $postcode);
    }

    public function testSecondaryAddressFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        $secondaryAddress = $generator->secondaryAddress();

        self::assertMatchesRegularExpression('/^(Flat|Studio) \d{2}[A-Za-z]?$/', $secondaryAddress);
    }
}
