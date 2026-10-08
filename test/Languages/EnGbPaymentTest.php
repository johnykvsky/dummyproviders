<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_GB\EnGbDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnGbPaymentTest extends TestCase
{
    public function testCurrency(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        self::assertSame('GBP', $generator->currencyCode());
        self::assertSame('£', $generator->currencySymbol());
        self::assertSame('Pound Sterling', $generator->currencyName());
    }
}
