<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\zh_TW\ZhTwDefinitionPack;
use PHPUnit\Framework\TestCase;

class ZhTwTest extends TestCase
{
    public function testPersonPersonalIdentityNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ZhTwDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $id = $generator->personalIdentityNumber();
            self::assertMatchesRegularExpression('/^[A-Z][12]\d{8}$/', $id);

            $male = $generator->personalIdentityNumber('male');
            self::assertSame('1', $male[1]);

            $female = $generator->personalIdentityNumber('female');
            self::assertSame('2', $female[1]);

            self::assertNotEmpty($generator->firstNameMale());
            self::assertNotEmpty($generator->firstNameFemale());
        }
    }

    public function testCompanyVatAndDetails(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ZhTwDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $vat = $generator->VAT();
            self::assertMatchesRegularExpression('/^\d{8}$/', $vat);

            self::assertNotEmpty($generator->companyEn());
            self::assertNotEmpty($generator->companyPrefix());
            self::assertNotEmpty($generator->bs());
        }
    }

    public function testAdministrativeDistrictNamesAreCurrentAndUnique(): void
    {
        $reflection = new \ReflectionClass(\DummyGenerator\Provider\Languages\zh_TW\Address::class);
        $defaults = $reflection->getDefaultProperties();
        /** @var array<string, list<string>> $cityData */
        $cityData = $defaults['city'];

        self::assertContains('頭份市', $cityData['苗栗縣']);
        self::assertNotContains('頭份鎮', $cityData['苗栗縣']);

        self::assertContains('員林市', $cityData['彰化縣']);
        self::assertNotContains('員林鎮', $cityData['彰化縣']);

        self::assertContains('中西區', $cityData['臺南市']);
        self::assertNotContains('中區', $cityData['臺南市']);
        self::assertNotContains('西區', $cityData['臺南市']);

        self::assertContains('那瑪夏區', $cityData['高雄市']);

        foreach ($cityData as $county => $districts) {
            self::assertSame(
                $districts,
                array_values(array_unique($districts)),
                sprintf('%s contains duplicate administrative districts.', $county),
            );
        }
    }
}
