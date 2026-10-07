<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\ja_JP\JaJpDefinitionPack;
use PHPUnit\Framework\TestCase;

class JaJpTest extends TestCase
{
    public function testPersonIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new JaJpDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $myNumber = $generator->myNumber();
            self::assertMatchesRegularExpression('/^\d{12}$/', $myNumber);

            $ind = $generator->individualNumber();
            self::assertMatchesRegularExpression('/^\d{12}$/', $ind);

            $weights = [6, 5, 4, 3, 2, 7, 6, 5, 4, 3, 2];
            $sum = 0;
            for ($j = 0; $j < 11; ++$j) {
                $sum += (int) $myNumber[$j] * $weights[$j];
            }

            $rem = $sum % 11;
            $check = $rem <= 1 ? 0 : 11 - $rem;
            self::assertSame($check, (int) $myNumber[11]);
        }
    }

    public function testCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new JaJpDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $corp = $generator->corporateNumber();
            self::assertMatchesRegularExpression('/^\d{13}$/', $corp);

            $houjin = $generator->houjinBangou();
            self::assertMatchesRegularExpression('/^\d{13}$/', $houjin);

            $sum = 0;
            for ($j = 1; $j < 13; ++$j) {
                $n = 13 - $j;
                $weight = ($n % 2 === 0) ? 2 : 1;
                $sum += (int) $corp[$j] * $weight;
            }

            $check = (9 - ($sum % 9)) % 9;
            self::assertSame($check, (int) $corp[0]);
        }
    }

    public function testAddressPostcode(): void
    {
        $generator = DummyGenerator::create()->withProvider(new JaJpDefinitionPack());

        for ($i = 0; $i < 30; ++$i) {
            $postcode1 = $generator->postcode1();
            self::assertMatchesRegularExpression('/^\d{3}$/', $postcode1);

            $postcode2 = $generator->postcode2();
            self::assertMatchesRegularExpression('/^\d{4}$/', $postcode2);

            $postcode = $generator->postcode();
            self::assertMatchesRegularExpression('/^\d{7}$/', $postcode);
        }
    }
}
