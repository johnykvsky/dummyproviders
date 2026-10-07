<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\zh_CN\ZhCnDefinitionPack;
use PHPUnit\Framework\TestCase;

class ZhCnTest extends TestCase
{
    public function testPersonIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ZhCnDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $id = $generator->residentId();
            self::assertMatchesRegularExpression('/^\d{17}[0-9X]$/', $id);

            $idCard = $generator->idCard();
            self::assertMatchesRegularExpression('/^\d{17}[0-9X]$/', $idCard);

            $weights = [7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2];
            $sum = 0;
            for ($j = 0; $j < 17; ++$j) {
                $sum += (int) $id[$j] * $weights[$j];
            }
            $checkMap = ['1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2'];
            self::assertSame($checkMap[$sum % 11], $id[17]);
        }
    }

    public function testCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ZhCnDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $uscc = $generator->uscc();
            self::assertMatchesRegularExpression('/^[0-9A-HJ-NP-RTUWXY]{18}$/', $uscc);

            $charset = '0123456789ABCDEFGHJKLMNPQRTUWXY';
            $weights = [1, 3, 9, 27, 19, 26, 16, 17, 20, 29, 25, 13, 8, 24, 10, 30, 28];
            $sum = 0;
            for ($j = 0; $j < 17; ++$j) {
                $val = (int) strpos($charset, $uscc[$j]);
                $sum += $val * $weights[$j];
            }
            $checkVal = (31 - ($sum % 31)) % 31;
            self::assertSame($charset[$checkVal], $uscc[17]);
        }
    }
}
