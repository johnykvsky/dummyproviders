<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_IN\EnInDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnInTest extends TestCase
{
    public function testPersonIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnInDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $pan = $generator->pan();
            self::assertMatchesRegularExpression('/^[A-Z]{3}P[A-Z]\d{4}[A-Z]$/', $pan);

            $aadhaarFormatted = $generator->aadhaar();
            self::assertMatchesRegularExpression('/^[2-9]\d{3} \d{4} \d{4}$/', $aadhaarFormatted);

            $aadhaar = $generator->aadhaar(false);
            self::assertMatchesRegularExpression('/^[2-9]\d{11}$/', $aadhaar);
        }
    }

    public function testCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnInDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $gstin = $generator->gstin();
            self::assertMatchesRegularExpression('/^\d{2}[A-Z]{3}C[A-Z]\d{4}[A-Z][1-9]Z[0-9A-Z]$/', $gstin);

            $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $sum = 0;
            for ($j = 0; $j < 14; ++$j) {
                $val = (int) strpos($chars, $gstin[$j]);
                $factor = ($j % 2 === 0) ? 1 : 2;
                $product = $val * $factor;
                $hash = intdiv($product, 36) + ($product % 36);
                $sum += $hash;
            }
            $rem = $sum % 36;
            $check = $chars[(36 - $rem) % 36];
            self::assertSame($check, $gstin[14]);

            $cin = $generator->cin();
            self::assertMatchesRegularExpression('/^[LU]\d{5}[A-Z]{2}\d{4}[A-Z]{3}\d{6}$/', $cin);
        }
    }
}
