<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\ar_EG\ArEgDefinitionPack;
use PHPUnit\Framework\TestCase;

class ArEgTest extends TestCase
{
    public function testPersonNationalId(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ArEgDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $nationalId = $generator->nationalIdNumber();
            self::assertMatchesRegularExpression('/^[23]\d{13}$/', $nationalId);
        }
    }

    public function testCompanyNumbers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ArEgDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $taxId = $generator->companyTaxIdNumber();
            self::assertMatchesRegularExpression('/^\d{10}$/', $taxId);

            $tradeReg = $generator->companyTradeRegisterNumber();
            self::assertMatchesRegularExpression('/^\d{7}$/', $tradeReg);
        }
    }
}
