<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_GB\EnGbDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnGbPersonTest extends TestCase
{
    public function testNinoFormatAndPrefixRules(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());
        $bannedPrefixes = ['BG', 'GB', 'KN', 'NK', 'NT', 'TN', 'ZZ'];

        $nino = $generator->nino();

        self::assertMatchesRegularExpression('/^[A-Z]{2}\d{6}[ABCD]$/', $nino);

        $prefix = substr($nino, 0, 2);
        self::assertFalse(in_array($prefix, $bannedPrefixes, true));
        self::assertNotSame('O', $prefix[1]);
    }
}
