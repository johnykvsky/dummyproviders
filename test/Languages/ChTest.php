<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\de_CH\DeChDefinitionPack;
use DummyGenerator\Provider\Languages\fr_CH\FrChDefinitionPack;
use DummyGenerator\Provider\Languages\it_CH\ItChDefinitionPack;
use PHPUnit\Framework\TestCase;

class ChTest extends TestCase
{
    public function testDeChCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new DeChDefinitionPack());

        for ($i = 0; $i < 10; ++$i) {
            $uid = $generator->uid();
            self::assertMatchesRegularExpression('/^CHE-\d{3}\.\d{3}\.\d{3}$/', $uid);

            $ide = $generator->ide();
            self::assertMatchesRegularExpression('/^CHE-\d{3}\.\d{3}\.\d{3}$/', $ide);
        }
    }

    public function testFrChCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new FrChDefinitionPack());

        for ($i = 0; $i < 10; ++$i) {
            $uid = $generator->uid();
            self::assertMatchesRegularExpression('/^CHE-\d{3}\.\d{3}\.\d{3}$/', $uid);

            $ide = $generator->ide();
            self::assertMatchesRegularExpression('/^CHE-\d{3}\.\d{3}\.\d{3}$/', $ide);
        }
    }

    public function testItChIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ItChDefinitionPack());

        for ($i = 0; $i < 10; ++$i) {
            $uid = $generator->uid();
            self::assertMatchesRegularExpression('/^CHE-\d{3}\.\d{3}\.\d{3}$/', $uid);

            $ide = $generator->ide();
            self::assertMatchesRegularExpression('/^CHE-\d{3}\.\d{3}\.\d{3}$/', $ide);

            $cf = $generator->codiceFiscale();
            self::assertMatchesRegularExpression('/^[A-Z]{6}\d{2}[A-Z]\d{2}[A-Z]\d{3}[A-Z]$/', $cf);
        }
    }
}
