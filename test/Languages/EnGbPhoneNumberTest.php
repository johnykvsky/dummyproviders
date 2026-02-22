<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_GB\EnGbDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnGbPhoneNumberTest extends TestCase
{
    public function testMobileNumberFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        $mobileNumber = $generator->mobileNumber();

        self::assertMatchesRegularExpression('/^07(\d{9}|\d{3} \d{6}|\d{3} \d{3} \d{3})$/', $mobileNumber);
    }
}
