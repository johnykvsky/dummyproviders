<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\pl_PL\PlPlDefinitionPack;
use PHPUnit\Framework\TestCase;

class PlPlCompanyTest extends TestCase
{
    public function testCompanyPrefixValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $companyPrefix = $generator->companyPrefix();

        self::assertContains($companyPrefix, ['Grupa', 'Fundacja', 'Stowarzyszenie', 'Spółdzielnia']);
    }

    public function testRegonFormatAndChecksum(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());

        $regon = $generator->regon();
        self::assertMatchesRegularExpression('/^\d{9}$/', $regon);
        self::assertSame(1, ((int) substr($regon, 0, 2)) % 2);
        self::assertSame((int) $regon[8], $this->regonChecksum(substr($regon, 0, 8)));
    }

    public function testRegonLocalFormatAndChecksum(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());

        $regonLocal = $generator->regonLocal();
        self::assertMatchesRegularExpression('/^\d{14}$/', $regonLocal);
        self::assertSame((int) $regonLocal[13], $this->regonLocalChecksum(substr($regonLocal, 0, 13)));
    }

    private function regonChecksum(string $digits): int
    {
        $weights = [8, 9, 2, 3, 4, 5, 6, 7];
        $sum = 0;

        for ($i = 0; $i < 8; ++$i) {
            $sum += (int) $digits[$i] * $weights[$i];
        }

        $checksum = $sum % 11;

        return $checksum === 10 ? 0 : $checksum;
    }

    private function regonLocalChecksum(string $digits): int
    {
        $weights = [2, 4, 8, 5, 0, 9, 7, 3, 6, 1, 2, 4, 8];
        $sum = 0;

        for ($i = 0; $i < 13; ++$i) {
            $sum += (int) $digits[$i] * $weights[$i];
        }

        $checksum = $sum % 11;

        return $checksum === 10 ? 0 : $checksum;
    }
}
