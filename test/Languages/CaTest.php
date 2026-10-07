<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_CA\EnCaDefinitionPack;
use DummyGenerator\Provider\Languages\fr_CA\FrCaDefinitionPack;
use PHPUnit\Framework\TestCase;

class CaTest extends TestCase
{
    public function testEnCaIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnCaDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $sin = $generator->sin();
            self::assertMatchesRegularExpression('/^\d{9}$/', $sin);

            $bn = $generator->bn();
            self::assertMatchesRegularExpression('/^\d{9}$/', $bn);
        }
    }

    public function testFrCaIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new FrCaDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $sin = $generator->sin();
            self::assertMatchesRegularExpression('/^\d{9}$/', $sin);

            $nas = $generator->nas();
            self::assertMatchesRegularExpression('/^\d{9}$/', $nas);

            $bn = $generator->bn();
            self::assertMatchesRegularExpression('/^\d{9}$/', $bn);

            $ne = $generator->ne();
            self::assertMatchesRegularExpression('/^\d{9}$/', $ne);
        }
    }
}
