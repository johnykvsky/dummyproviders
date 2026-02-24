<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_US\EnUsDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnUsPersonTest extends TestCase
{
    public function testSuffixValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());
        $suffix = $generator->suffix();

        self::assertContains($suffix, ['Jr.', 'Sr.', 'I', 'II', 'III', 'IV', 'V', 'MD', 'DDS', 'PhD', 'DVM']);
    }

    public function testSsnFormatAndRanges(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());

        $ssn = $generator->ssn();
        self::assertMatchesRegularExpression('/^\d{3}-\d{2}-\d{4}$/', $ssn);

        $area = (int) substr($ssn, 0, 3);
        $group = (int) substr($ssn, 4, 2);
        $serial = (int) substr($ssn, 7, 4);

        self::assertNotSame(666, $area);
        self::assertGreaterThanOrEqual(1, $area);
        self::assertLessThanOrEqual(899, $area);
        self::assertNotSame(0, $group);
        self::assertNotSame(0, $serial);
    }
}
