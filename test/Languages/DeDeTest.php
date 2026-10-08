<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\de_DE\DeDeDefinitionPack;
use PHPUnit\Framework\TestCase;

class DeDeTest extends TestCase
{
    public function testPersonIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new DeDeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $steuerId = $generator->steuerId();
            self::assertMatchesRegularExpression('/^\d{11}$/', $steuerId);

            $taxId = $generator->taxId();
            self::assertMatchesRegularExpression('/^\d{11}$/', $taxId);

            $steuernummer = $generator->steuernummer();
            self::assertMatchesRegularExpression('/^\d{2,3}\/\d{3}\/\d{4,5}$/', $steuernummer);
        }
    }

    public function testCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new DeDeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $ustIdNr = $generator->ustIdNr();
            self::assertMatchesRegularExpression('/^DE\d{9}$/', $ustIdNr);

            $vatId = $generator->vatId();
            self::assertMatchesRegularExpression('/^DE\d{9}$/', $vatId);

            $hrn = $generator->handelsregisternummer();
            self::assertMatchesRegularExpression('/^HR[AB] \d{1,6}$/', $hrn);
        }
    }

    public function testPhoneNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new DeDeDefinitionPack());

        for ($i = 0; $i < 30; ++$i) {
            $number = $generator->phoneNumber();
            self::assertNotEmpty($number);
            if (str_starts_with($number, '+49')) {
                self::assertDoesNotMatchRegularExpression('/^\+49\s*\(?0/', $number);
            }
        }
    }

    public function testCurrency(): void
    {
        $generator = DummyGenerator::create()->withProvider(new DeDeDefinitionPack());

        self::assertSame('EUR', $generator->currencyCode());
        self::assertSame('€', $generator->currencySymbol());
        self::assertSame('Euro', $generator->currencyName());
    }
}
