<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\nl_NL\NlNlDefinitionPack;
use PHPUnit\Framework\TestCase;

class NlNlTest extends TestCase
{
    public function testBsn(): void
    {
        $generator = DummyGenerator::create()->withProvider(new NlNlDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $bsn = $generator->bsn();
            self::assertMatchesRegularExpression('/^\d{9}$/', $bsn);

            // 11-test
            $sum = 0;
            for ($j = 0; $j < 8; ++$j) {
                $sum += (int) $bsn[$j] * (9 - $j);
            }

            $sum -= (int) $bsn[8];
            self::assertSame(0, $sum % 11);
        }
    }

    public function testKvkAndKvkNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new NlNlDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $kvk = $generator->kvk();
            self::assertMatchesRegularExpression('/^\d{8}$/', $kvk);

            $kvkNumber = $generator->kvkNumber();
            self::assertMatchesRegularExpression('/^\d{8}$/', $kvkNumber);
        }
    }

    public function testIdNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new NlNlDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $id = $generator->idNumber();
            self::assertMatchesRegularExpression('/^\d{9}$/', $id);
        }
    }

    public function testVatAndBtw(): void
    {
        $generator = DummyGenerator::create()->withProvider(new NlNlDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $vat = $generator->vat();
            self::assertMatchesRegularExpression('/^NL\d{9}B\d{2}$/', $vat);

            $btw = $generator->btw();
            self::assertMatchesRegularExpression('/^NL\d{9}B\d{2}$/', $btw);
        }
    }

    public function testCurrency(): void
    {
        $generator = DummyGenerator::create()->withProvider(new NlNlDefinitionPack());

        self::assertSame('EUR', $generator->currencyCode());
        self::assertSame('€', $generator->currencySymbol());
        self::assertSame('Euro', $generator->currencyName());
    }
}
