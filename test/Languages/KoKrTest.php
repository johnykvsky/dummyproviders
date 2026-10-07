<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\ko_KR\KoKrDefinitionPack;
use PHPUnit\Framework\TestCase;

class KoKrTest extends TestCase
{
    public function testPersonIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new KoKrDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $rrnFormatted = $generator->rrn();
            self::assertMatchesRegularExpression('/^\d{6}-[1-4]\d{6}$/', $rrnFormatted);

            $rrn = $generator->rrn(false);
            self::assertMatchesRegularExpression('/^\d{6}[1-4]\d{6}$/', $rrn);

            $weights = [2, 3, 4, 5, 6, 7, 8, 9, 2, 3, 4, 5];
            $sum = 0;
            for ($j = 0; $j < 12; ++$j) {
                $sum += (int) $rrn[$j] * $weights[$j];
            }
            $check = (11 - ($sum % 11)) % 10;
            self::assertSame($check, (int) $rrn[12]);

            $rrnAlias = $generator->residentRegistrationNumber();
            self::assertMatchesRegularExpression('/^\d{6}-[1-4]\d{6}$/', $rrnAlias);
        }
    }

    public function testCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new KoKrDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $brnFormatted = $generator->brn();
            self::assertMatchesRegularExpression('/^\d{3}-\d{2}-\d{5}$/', $brnFormatted);

            $brn = $generator->brn(false);
            self::assertMatchesRegularExpression('/^\d{10}$/', $brn);

            $weights = [1, 3, 7, 1, 3, 7, 1, 3, 5];
            $sum = 0;
            for ($j = 0; $j < 9; ++$j) {
                $sum += (int) $brn[$j] * $weights[$j];
            }
            $sum += intdiv(((int) $brn[8]) * 5, 10);
            $check = (10 - ($sum % 10)) % 10;
            self::assertSame($check, (int) $brn[9]);

            $brnAlias = $generator->businessRegistrationNumber();
            self::assertMatchesRegularExpression('/^\d{3}-\d{2}-\d{5}$/', $brnAlias);
        }
    }
}
