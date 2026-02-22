<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_US\EnUsDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnUsCompanyTest extends TestCase
{
    public function testCatchPhraseHasThreeParts(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());
        $catchPhrase = $generator->catchPhrase();

        self::assertCount(3, explode(' ', $catchPhrase));
    }

    public function testBsHasThreeParts(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());
        $bs = $generator->bs();

        self::assertCount(3, explode(' ', $bs));
    }

    public function testEinFormatAndPrefix(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());
        $validPrefixes = [
            1, 2, 3, 4, 5, 6, 10, 11, 12, 13, 14, 15, 16, 20, 21, 22, 23, 24, 25, 26, 27, 30, 31, 32, 33, 34, 35, 36,
            37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65,
            66, 67, 68, 71, 72, 73, 74, 75, 76, 77, 80, 81, 82, 83, 84, 85, 86, 87, 88, 90, 91, 92, 93, 94, 95, 98, 99,
        ];

        $ein = $generator->ein();
        self::assertMatchesRegularExpression('/^\d{2}-\d{7}$/', $ein);
        self::assertContains((int) substr($ein, 0, 2), $validPrefixes);
    }
}
