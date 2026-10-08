<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\sv_SE\SvSeDefinitionPack;
use PHPUnit\Framework\TestCase;

class SvSeTest extends TestCase
{
    public function testCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new SvSeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $org = $generator->organisationsnummer();
            self::assertMatchesRegularExpression('/^\d{6}-\d{4}$/', $org);
            self::assertGreaterThanOrEqual(2, (int) $org[2]);

            $orgRaw = $generator->organisationsnummer(false);
            self::assertMatchesRegularExpression('/^\d{10}$/', $orgRaw);

            $orgNum = $generator->organisationNumber();
            self::assertMatchesRegularExpression('/^\d{6}-\d{4}$/', $orgNum);

            $vat = $generator->vat();
            self::assertMatchesRegularExpression('/^SE\d{12}$/', $vat);
            self::assertSame('01', substr($vat, -2));

            $moms = $generator->moms();
            self::assertMatchesRegularExpression('/^SE\d{12}$/', $moms);
        }
    }

    public function testPersonalIdentityNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new SvSeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $id = $generator->personalIdentityNumber();
            self::assertMatchesRegularExpression('/^\d{6}-\d{4}$/', $id);

            $male = $generator->personalIdentityNumber(null, 'male');
            $thirdDigitMale = (int) $male[9];
            self::assertSame(1, $thirdDigitMale % 2);

            $female = $generator->personalIdentityNumber(null, 'female');
            $thirdDigitFemale = (int) $female[9];
            self::assertSame(0, $thirdDigitFemale % 2);
        }
    }

    public function testMobileNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new SvSeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $mobile = $generator->mobileNumber();
            self::assertNotEmpty($mobile);
        }
    }

    public function testMunicipality(): void
    {
        $generator = DummyGenerator::create()->withProvider(new SvSeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $municipality = $generator->municipality();
            self::assertNotEmpty($municipality);
        }
    }
}
