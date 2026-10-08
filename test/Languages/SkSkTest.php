<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\sk_SK\SkSkDefinitionPack;
use PHPUnit\Framework\TestCase;

class SkSkTest extends TestCase
{
    public function testPersonIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new SkSkDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $bn = $generator->birthNumber();
            self::assertMatchesRegularExpression('/^\d{6}\/?\d{3,4}$/', $bn);

            $rc = $generator->rodneCislo();
            self::assertMatchesRegularExpression('/^\d{6}\/?\d{3,4}$/', $rc);
        }
    }

    public function testCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new SkSkDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $ico = $generator->ico();
            self::assertMatchesRegularExpression('/^\d{8}$/', $ico);

            $weights = [8, 7, 6, 5, 4, 3, 2];
            $sum = 0;
            for ($j = 0; $j < 7; ++$j) {
                $sum += (int) $ico[$j] * $weights[$j];
            }
            $rem = $sum % 11;
            $check = ($rem === 0 || $rem === 10) ? 1 : (($rem === 1) ? 0 : 11 - $rem);
            self::assertSame($check, (int) $ico[7]);

            $dic = $generator->dic();
            self::assertMatchesRegularExpression('/^\d{10}$/', $dic);

            $icDph = $generator->icDph();
            self::assertMatchesRegularExpression('/^SK\d{10}$/', $icDph);
        }
    }
}
