<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\ms_MY\MsMyDefinitionPack;
use PHPUnit\Framework\TestCase;

class MsMyTest extends TestCase
{
    public function testPersonMyKadNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new MsMyDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $myKad = $generator->myKadNumber();
            self::assertMatchesRegularExpression('/^\d{12}$/', $myKad);

            $myKadHyphen = $generator->myKadNumber(null, true);
            self::assertMatchesRegularExpression('/^\d{6}-\d{2}-\d{4}$/', $myKadHyphen);

            $male = $generator->myKadNumber('male');
            $lastDigitMale = (int) substr($male, -1);
            self::assertSame(1, $lastDigitMale % 2);

            $female = $generator->myKadNumber('female');
            $lastDigitFemale = (int) substr($female, -1);
            self::assertSame(0, $lastDigitFemale % 2);

            self::assertNotEmpty($generator->lastName());
            self::assertNotEmpty($generator->firstNameMaleChinese());
            self::assertNotEmpty($generator->firstNameFemaleChinese());
            self::assertNotEmpty($generator->firstNameMaleIndian());
            self::assertNotEmpty($generator->firstNameFemaleIndian());
        }
    }

    public function testPhoneNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new MsMyDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $mobile = $generator->mobileNumber(false, false);
            self::assertMatchesRegularExpression('/^01\d{8,9}$/', $mobile);

            $fixed = $generator->fixedLineNumber(false, false);
            self::assertMatchesRegularExpression('/^0\d{8,9}$/', $fixed);

            $voip = $generator->voipNumber(false, false);
            self::assertMatchesRegularExpression('/^015\d{7,8}$/', $voip);
        }
    }

    public function testCompany(): void
    {
        $generator = DummyGenerator::create()->withProvider(new MsMyDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $company = $generator->company();
            self::assertNotEmpty($company);
            self::assertIsString($company);

            $companyName = $generator->companyName();
            self::assertNotEmpty($companyName);
            self::assertIsString($companyName);

            $industry = $generator->industry();
            self::assertNotEmpty($industry);
            self::assertIsString($industry);
        }
    }

    public function testPayment(): void
    {
        $generator = DummyGenerator::create()->withProvider(new MsMyDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $currencySymbol = $generator->currencySymbol();
            self::assertSame('RM', $currencySymbol);

            $swiftCode = $generator->swiftCode();
            self::assertNotEmpty($swiftCode);
            self::assertIsString($swiftCode);

            $localBank = $generator->localBank();
            self::assertNotEmpty($localBank);
            self::assertIsString($localBank);

            $foreignBank = $generator->foreignBank();
            self::assertNotEmpty($foreignBank);
            self::assertIsString($foreignBank);

            $governmentBank = $generator->governmentBank();
            self::assertNotEmpty($governmentBank);
            self::assertIsString($governmentBank);

            $insurance = $generator->insurance();
            self::assertNotEmpty($insurance);
            self::assertIsString($insurance);

            $currencyCode = $generator->currencyCode();
            self::assertSame('MYR', $currencyCode);

            $currencyName = $generator->currencyName();
            self::assertSame('Ringgit Malaysia', $currencyName);
        }
    }
}
