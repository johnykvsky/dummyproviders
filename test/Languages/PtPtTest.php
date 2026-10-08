<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\pt_PT\PtPtDefinitionPack;
use PHPUnit\Framework\TestCase;

class PtPtTest extends TestCase
{
    public function testTaxpayerIdentificationNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PtPtDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $nif = $generator->taxpayerIdentificationNumber();
            self::assertMatchesRegularExpression('/^\d{9}$/', $nif);
        }
    }

    public function testMobileNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PtPtDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $mobile = $generator->mobileNumber();
            self::assertMatchesRegularExpression('/^9[1236]\d{7}$/', $mobile);
        }
    }
}
