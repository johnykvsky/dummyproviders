<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\pt_BR\CheckDigit;
use DummyGenerator\Provider\Languages\pt_BR\PtBrDefinitionPack;
use PHPUnit\Framework\TestCase;

class PtBrTest extends TestCase
{
    public function testPersonCpf(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PtBrDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $formatted = $generator->cpf(true);
            self::assertMatchesRegularExpression('/^\d{3}\.\d{3}\.\d{3}-\d{2}$/', $formatted);

            $unformatted = $generator->cpf(false);
            self::assertMatchesRegularExpression('/^\d{11}$/', $unformatted);
        }
    }

    public function testPersonRg(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PtBrDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $formatted = $generator->rg(true);
            self::assertMatchesRegularExpression('/^\d{2}\.\d{3}\.\d{3}-[\dX]$/', $formatted);

            $unformatted = $generator->rg(false);
            self::assertMatchesRegularExpression('/^\d{8}[\dX]$/', $unformatted);
        }
    }

    public function testCompanyCnpj(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PtBrDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $formatted = $generator->cnpj(true);
            self::assertMatchesRegularExpression('/^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/', $formatted);

            $unformatted = $generator->cnpj(false);
            self::assertMatchesRegularExpression('/^\d{14}$/', $unformatted);
        }
    }

    public function testCompanyCnpjAlpha(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PtBrDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $unformatted = $generator->cnpjAlpha(false);
            self::assertMatchesRegularExpression('/^[A-Z0-9]{8}\d{4}\d{2}$/', $unformatted);

            $formatted = $generator->cnpjAlpha(true);
            self::assertMatchesRegularExpression('/^[A-Z0-9]{2}\.[A-Z0-9]{3}\.[A-Z0-9]{3}\/\d{4}-\d{2}$/', $formatted);

            self::assertSame((int) $unformatted[12], CheckDigit::checkAlpha(substr($unformatted, 0, 12)));
            self::assertSame((int) $unformatted[13], CheckDigit::checkAlpha(substr($unformatted, 0, 13)));
        }
    }

    public function testPhoneNumbers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PtBrDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $areaCode = $generator->areaCode();
            self::assertMatchesRegularExpression('/^\d{2}$/', $areaCode);

            $cell = $generator->cellphone(true);
            self::assertMatchesRegularExpression('/^9\d{4}-\d{4}$/', $cell);

            $land = $generator->landline(true);
            self::assertMatchesRegularExpression('/^[234]\d{3}-\d{4}$/', $land);
        }
    }
}
