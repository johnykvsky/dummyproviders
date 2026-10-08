<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\tr_TR\TrTrDefinitionPack;
use PHPUnit\Framework\TestCase;

class TrTrTest extends TestCase
{
    public function testVkn(): void
    {
        $generator = DummyGenerator::create()->withProvider(new TrTrDefinitionPack());

        for ($k = 0; $k < 20; ++$k) {
            $vkn = $generator->vkn();
            self::assertMatchesRegularExpression('/^\d{10}$/', $vkn);

            $s = 0;
            $rev = strrev(substr($vkn, 0, 9));
            for ($i = 1; $i <= 9; ++$i) {
                $n = (int) $rev[$i - 1];
                $c1 = ($n + $i) % 10;
                if ($c1 !== 0) {
                    $c2 = ($c1 * (2 ** $i)) % 9;
                    if ($c2 === 0) {
                        $c2 = 9;
                    }

                    $s += $c2;
                }
            }

            $check = (10 - ($s % 10)) % 10;
            self::assertSame($check, (int) $vkn[9]);
        }
    }

    public function testTcNo(): void
    {
        $generator = DummyGenerator::create()->withProvider(new TrTrDefinitionPack());

        for ($k = 0; $k < 20; ++$k) {
            $tcNo = $generator->tcNo();
            self::assertMatchesRegularExpression('/^\d{11}$/', $tcNo);
            self::assertTrue($generator->tcNoIsValid($tcNo));
        }

        // Test where 7 * evenSum - oddSum is negative (e.g. 7 * 1 - 36 = -29, tenth digit is 1)
        self::assertSame('18', $generator->tcNoChecksum('190909090'));
        self::assertTrue($generator->tcNoIsValid('19090909018'));
        self::assertFalse($generator->tcNoIsValid('19090909019'));
    }

    public function testDateTime(): void
    {
        $generator = DummyGenerator::create()->withProvider(new TrTrDefinitionPack());

        self::assertContains($generator->amPm(), ['öö', 'ös']);
        self::assertContains($generator->dayOfWeek(), ['Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi']);
        self::assertContains($generator->monthName(), [
            'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran',
            'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık',
        ]);
    }
}
