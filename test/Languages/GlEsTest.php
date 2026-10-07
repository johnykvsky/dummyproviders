<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\gl_ES\GlEsDefinitionPack;
use PHPUnit\Framework\TestCase;

class GlEsTest extends TestCase
{
    public function testAddress(): void
    {
        $generator = DummyGenerator::create()->withProvider(new GlEsDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $cityName = $generator->cityName();
            self::assertNotEmpty($cityName);

            $state = $generator->state();
            self::assertContains($state, ['A Coruña', 'Lugo', 'Ourense', 'Pontevedra']);

            $postcode = $generator->postcode();
            self::assertMatchesRegularExpression('/^(15|27|32|36)\d{3}$/', $postcode);

            $streetAddress = $generator->streetAddress();
            self::assertNotEmpty($streetAddress);

            $address = $generator->address();
            self::assertNotEmpty($address);
        }
    }

    public function testColor(): void
    {
        $generator = DummyGenerator::create()->withProvider(new GlEsDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            self::assertNotEmpty($generator->safeColorName());
        }
    }

    public function testCompany(): void
    {
        $generator = DummyGenerator::create()->withProvider(new GlEsDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            self::assertNotEmpty($generator->company());
            self::assertNotEmpty($generator->companyPrefix());
        }
    }

    public function testPerson(): void
    {
        $generator = DummyGenerator::create()->withProvider(new GlEsDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $dni = $generator->dni();
            self::assertMatchesRegularExpression('/^\d{8}[A-Z]$/', $dni);

            $num = (int) substr($dni, 0, 8);
            $crc = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
            self::assertSame($crc[$num % 23], substr($dni, -1));

            self::assertNotEmpty($generator->licenceCode());
            self::assertNotEmpty($generator->firstName());
            self::assertNotEmpty($generator->lastName());
            self::assertNotEmpty($generator->name());
        }
    }

    public function testPhoneNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new GlEsDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $phone = $generator->phoneNumber();
            self::assertMatchesRegularExpression('/^(\+34\s?)?98[1268]/', $phone);
        }
    }
}
