<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\es_VE\EsVeDefinitionPack;
use PHPUnit\Framework\TestCase;

class EsVeTest extends TestCase
{
    public function testPersonNationalIdAndSuffix(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EsVeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $id = $generator->nationalId();
            self::assertMatchesRegularExpression('/^[VE]\d{5,9}$/', $id);

            $idWithHyphen = $generator->nationalId('-');
            self::assertMatchesRegularExpression('/^[VE]-\d{5,9}$/', $idWithHyphen);

            self::assertSame('Hijo', $generator->suffix());
        }
    }

    public function testCompanyTaxpayerIdentificationNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EsVeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $rif = $generator->taxpayerIdentificationNumber();
            self::assertMatchesRegularExpression('/^[JGVEPC]\d{9}$/', $rif);

            $rifWithDash = $generator->taxpayerIdentificationNumber('-');
            self::assertMatchesRegularExpression('/^[JGVEPC]-\d{8}-\d$/', $rifWithDash);

            self::assertNotEmpty($generator->companyPrefix());
        }
    }
}
