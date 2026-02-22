<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\pl_PL\PlPlDefinitionPack;
use PHPUnit\Framework\TestCase;

class PlPlAddressTest extends TestCase
{
    public function testCityValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $city = $generator->city();

        self::assertIsString($city);
        self::assertNotSame('', $city);
    }

    public function testStreetNameValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $streetName = $generator->streetName();

        self::assertIsString($streetName);
        self::assertNotSame('', $streetName);
    }

    public function testStateValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $state = $generator->state();

        self::assertContains($state, [
            'dolnośląskie', 'kujawsko-pomorskie', 'lubelskie', 'lubuskie', 'łódzkie', 'małopolskie', 'mazowieckie',
            'opolskie', 'podkarpackie', 'podlaskie', 'pomorskie', 'śląskie', 'świętokrzyskie', 'warmińsko-mazurskie',
            'wielkopolskie', 'zachodniopomorskie',
        ]);
    }
}
