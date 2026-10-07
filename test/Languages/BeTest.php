<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\fr_BE\FrBeDefinitionPack;
use DummyGenerator\Provider\Languages\nl_BE\NlBeDefinitionPack;
use PHPUnit\Framework\TestCase;

class BeTest extends TestCase
{
    public function testNlBeCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new NlBeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $kbo = $generator->kbo();
            self::assertMatchesRegularExpression('/^[01]\d{3}\.\d{3}\.\d{3}$/', $kbo);

            $kboRaw = $generator->kbo(false);
            self::assertMatchesRegularExpression('/^[01]\d{9}$/', $kboRaw);

            $bce = $generator->bce();
            self::assertMatchesRegularExpression('/^[01]\d{3}\.\d{3}\.\d{3}$/', $bce);

            $bceRaw = $generator->bce(false);
            self::assertMatchesRegularExpression('/^[01]\d{9}$/', $bceRaw);

            $vat = $generator->vat();
            self::assertMatchesRegularExpression('/^BE [01]\d{3}\.\d{3}\.\d{3}$/', $vat);

            $vatRaw = $generator->vat(false);
            self::assertMatchesRegularExpression('/^BE[01]\d{9}$/', $vatRaw);
        }
    }

    public function testFrBeCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new FrBeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $bce = $generator->bce();
            self::assertMatchesRegularExpression('/^[01]\d{3}\.\d{3}\.\d{3}$/', $bce);

            $bceRaw = $generator->bce(false);
            self::assertMatchesRegularExpression('/^[01]\d{9}$/', $bceRaw);

            $kbo = $generator->kbo();
            self::assertMatchesRegularExpression('/^[01]\d{3}\.\d{3}\.\d{3}$/', $kbo);

            $kboRaw = $generator->kbo(false);
            self::assertMatchesRegularExpression('/^[01]\d{9}$/', $kboRaw);

            $vat = $generator->vat();
            self::assertMatchesRegularExpression('/^BE [01]\d{3}\.\d{3}\.\d{3}$/', $vat);

            $vatRaw = $generator->vat(false);
        }
    }

    public function testNlBePersonIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new NlBeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $rrn = $generator->rrn();
            self::assertMatchesRegularExpression('/^\d{11}$/', $rrn);

            $male = $generator->rrn('male');
            $middleMale = (int) substr($male, 6, 3);
            self::assertSame(1, $middleMale % 2);

            $female = $generator->rrn('female');
            $middleFemale = (int) substr($female, 6, 3);
            self::assertSame(0, $middleFemale % 2);
        }
    }
}

