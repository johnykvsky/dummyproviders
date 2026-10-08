<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_IE\EnIeDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnIeTest extends TestCase
{
    public function testAddress(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnIeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $eircode = $generator->eircode();
            self::assertMatchesRegularExpression('/^[A-Z]\d[\dW] [A-Z0-9]{4}$/', $eircode);

            $postcode = $generator->postcode();
            self::assertMatchesRegularExpression('/^[A-Z]\d[\dW] [A-Z0-9]{4}$/', $postcode);

            self::assertNotEmpty($generator->county());
            self::assertNotEmpty($generator->cityName());
            self::assertNotEmpty($generator->city());
            self::assertNotEmpty($generator->streetAddress());
            self::assertNotEmpty($generator->address());
        }
    }

    public function testPerson(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnIeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            self::assertNotEmpty($generator->firstName());
            self::assertNotEmpty($generator->lastName());
            self::assertNotEmpty($generator->name());
        }
    }

    public function testPhoneNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnIeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $mobile = $generator->mobileNumber();
            self::assertMatchesRegularExpression('/^08[35679] \d{3} \d{4}$/', $mobile);

            $phone = $generator->phoneNumber();
            self::assertNotEmpty($phone);
        }
    }

    public function testPayment(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnIeDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $iban = $generator->bankAccountNumber();
            self::assertStringStartsWith('IE', $iban);
            self::assertSame(22, strlen($iban));
        }
    }
}
