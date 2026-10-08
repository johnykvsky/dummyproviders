<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_AU\EnAuDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnAuTest extends TestCase
{
    public function testPersonIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnAuDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $tfn = $generator->tfn();
            self::assertMatchesRegularExpression('/^\d{9}$/', $tfn);

            $weights = [1, 4, 3, 7, 5, 8, 6, 9, 10];
            $sum = 0;
            for ($j = 0; $j < 9; ++$j) {
                $sum += (int) $tfn[$j] * $weights[$j];
            }
            self::assertSame(0, $sum % 11);

            $medicare = $generator->medicare();
            self::assertMatchesRegularExpression('/^[2-6]\d{9}$/', $medicare);
        }
    }

    public function testCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnAuDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $acn = $generator->acn();
            self::assertMatchesRegularExpression('/^\d{9}$/', $acn);

            $weights = [8, 7, 6, 5, 4, 3, 2, 1];
            $sum = 0;
            for ($j = 0; $j < 8; ++$j) {
                $sum += (int) $acn[$j] * $weights[$j];
            }
            $rem = $sum % 10;
            $check = (10 - $rem) % 10;
            self::assertSame($check, (int) $acn[8]);

            $abn = $generator->abn();
            self::assertMatchesRegularExpression('/^\d{11}$/', $abn);
            $abnWeights = [10, 1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
            $abnSum = ((int) $abn[0] - 1) * $abnWeights[0];
            for ($j = 1; $j < 11; ++$j) {
                $abnSum += (int) $abn[$j] * $abnWeights[$j];
            }
            self::assertSame(0, $abnSum % 89);
        }
    }
}
