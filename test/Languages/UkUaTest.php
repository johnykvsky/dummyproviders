<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\uk_UA\UkUaDefinitionPack;
use PHPUnit\Framework\TestCase;

class UkUaTest extends TestCase
{
    public function testPersonIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new UkUaDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $rntrc = $generator->rntrc();
            self::assertMatchesRegularExpression('/^\d{10}$/', $rntrc);

            $ipn = $generator->ipn();
            self::assertMatchesRegularExpression('/^\d{10}$/', $ipn);

            $weights = [-1, 5, 7, 9, 4, 6, 10, 2, 8];
            $sum = 0;
            for ($j = 0; $j < 9; ++$j) {
                $sum += (int) $rntrc[$j] * $weights[$j];
            }

            $rem = ($sum % 11) % 10;
            if ($rem < 0) {
                $rem += 10;
            }

            self::assertSame($rem, (int) $rntrc[9]);
        }
    }

    public function testCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new UkUaDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $edrpou = $generator->edrpou();
            self::assertMatchesRegularExpression('/^\d{8}$/', $edrpou);
        }
    }

    public function testInitials(): void
    {
        $generator = DummyGenerator::create()->withProvider(new UkUaDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $initials = $generator->initials();
            self::assertMatchesRegularExpression('/^[А-ЯІЇЄҐ]\. [А-ЯІЇЄҐ]\.$/u', $initials);
        }

        $single = $generator->initials(1);
        self::assertMatchesRegularExpression('/^[А-ЯІЇЄҐ]\.$/u', $single);
    }
}
