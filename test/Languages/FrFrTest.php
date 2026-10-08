<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\fr_FR\FrFrDefinitionPack;
use PHPUnit\Framework\TestCase;

class FrFrTest extends TestCase
{
    public function testTvaAndVat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new FrFrDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $tva = $generator->tva();
            self::assertMatchesRegularExpression('/^FR \d{2} \d{3} \d{3} \d{3}$/', $tva);

            $tvaRaw = $generator->tva(false);
            self::assertMatchesRegularExpression('/^FR\d{11}$/', $tvaRaw);

            $vat = $generator->vat();
            self::assertMatchesRegularExpression('/^FR \d{2} \d{3} \d{3} \d{3}$/', $vat);

            $siren = substr($tvaRaw, 4);
            $key = (int) substr($tvaRaw, 2, 2);
            $expectedKey = (12 + 3 * (((int) $siren) % 97)) % 97;
            self::assertSame($expectedKey, $key);
        }
    }

    public function testCurrency(): void
    {
        $generator = DummyGenerator::create()->withProvider(new FrFrDefinitionPack());

        self::assertSame('EUR', $generator->currencyCode());
        self::assertSame('€', $generator->currencySymbol());
        self::assertSame('Euro', $generator->currencyName());
    }
}
