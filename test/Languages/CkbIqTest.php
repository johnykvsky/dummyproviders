<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\ckb_IQ\CkbIqDefinitionPack;
use PHPUnit\Framework\TestCase;

class CkbIqTest extends TestCase
{
    public function testAddress(): void
    {
        $generator = DummyGenerator::create()->withProvider(new CkbIqDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $cityName = $generator->cityName();
            self::assertNotEmpty($cityName);
            self::assertMatchesRegularExpression('/\p{Arabic}/u', $cityName);

            $city = $generator->city();
            self::assertNotEmpty($city);
            self::assertMatchesRegularExpression('/\p{Arabic}/u', $city);

            $street = $generator->streetName();
            self::assertNotEmpty($street);
            self::assertMatchesRegularExpression('/\p{Arabic}/u', $street);

            $address = $generator->address();
            self::assertNotEmpty($address);
            self::assertMatchesRegularExpression('/\p{Arabic}/u', $address);

            $postcode = $generator->postcode();
            self::assertMatchesRegularExpression('/^\d{5}$/', $postcode);

            $country = $generator->country();
            self::assertContains($country, ['عێراق', 'هەرێمی کوردستان']);
        }
    }

    public function testCompany(): void
    {
        $generator = DummyGenerator::create()->withProvider(new CkbIqDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $company = $generator->company();
            self::assertNotEmpty($company);
            self::assertMatchesRegularExpression('/\p{Arabic}/u', $company);

            $field = $generator->companyField();
            self::assertNotEmpty($field);
            self::assertMatchesRegularExpression('/\p{Arabic}/u', $field);

            $contract = $generator->contract();
            self::assertNotEmpty($contract);
            self::assertMatchesRegularExpression('/\p{Arabic}/u', $contract);
        }
    }

    public function testPerson(): void
    {
        $generator = DummyGenerator::create()->withProvider(new CkbIqDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $firstName = $generator->firstName();
            self::assertNotEmpty($firstName);
            self::assertMatchesRegularExpression('/\p{Arabic}/u', $firstName);

            $lastName = $generator->lastName();
            self::assertNotEmpty($lastName);
            self::assertMatchesRegularExpression('/\p{Arabic}/u', $lastName);

            $name = $generator->name();
            self::assertNotEmpty($name);
            self::assertMatchesRegularExpression('/\p{Arabic}/u', $name);
        }
    }

    public function testPhoneNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new CkbIqDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $phone = $generator->phoneNumber();
            self::assertMatchesRegularExpression('/^0(50|53|62|66)\d{6}$/', $phone);

            $mobile = $generator->mobileNumber();
            self::assertMatchesRegularExpression('/^07[5789]\d{8}$/', $mobile);
        }
    }
}
