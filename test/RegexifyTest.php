<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test;

use DummyGenerator\Provider\Regexify;
use PHPUnit\Framework\TestCase;

class RegexifyTest extends TestCase
{
    public function testRegexifyEmptyStringReturnsEmptyString(): void
    {
        self::assertSame('', Regexify::regexify(''));
    }

    public function testRegexifyPlainText(): void
    {
        self::assertSame('hello', Regexify::regexify('hello'));
    }

    public function testRegexifyDigitShorthand(): void
    {
        $result = Regexify::regexify('\d{5}');
        self::assertMatchesRegularExpression('/^\d{5}$/', $result);
    }

    public function testRegexifyWordShorthand(): void
    {
        $result = Regexify::regexify('\w{8}');
        self::assertMatchesRegularExpression('/^[a-z]{8}$/', $result);
    }

    public function testRegexifyCharacterClass(): void
    {
        for ($i = 0; $i < 20; $i++) {
            $result = Regexify::regexify('[ABC]');
            self::assertContains($result, ['A', 'B', 'C']);
        }
    }

    public function testRegexifyCharacterRange(): void
    {
        for ($i = 0; $i < 20; $i++) {
            $result = Regexify::regexify('[a-f]{4}');
            self::assertMatchesRegularExpression('/^[a-f]{4}$/', $result);
        }
    }

    public function testRegexifyQuantifierExact(): void
    {
        $result = Regexify::regexify('X{6}');
        self::assertSame('XXXXXX', $result);
    }

    public function testRegexifyQuantifierRange(): void
    {
        for ($i = 0; $i < 20; $i++) {
            $result = Regexify::regexify('A{2,5}');
            $len = strlen($result);
            self::assertGreaterThanOrEqual(2, $len);
            self::assertLessThanOrEqual(5, $len);
            self::assertMatchesRegularExpression('/^A+$/', $result);
        }
    }

    public function testRegexifyOptionalQuantifier(): void
    {
        $results = [];
        for ($i = 0; $i < 30; $i++) {
            $results[] = Regexify::regexify('A?');
        }
        $unique = array_unique($results);
        self::assertContains('', $unique);
        self::assertContains('A', $unique);
    }

    public function testRegexifyAlternation(): void
    {
        for ($i = 0; $i < 20; $i++) {
            $result = Regexify::regexify('(foo|bar|baz)');
            self::assertContains($result, ['foo', 'bar', 'baz']);
        }
    }

    public function testRegexifyIgnoresAnchorsAndDelimiters(): void
    {
        $result = Regexify::regexify('/^[0-9]{4}$/');
        self::assertMatchesRegularExpression('/^\d{4}$/', $result);
    }

    public function testRegexifyComplexPattern(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $result = Regexify::regexify('[A-Z]{2}\d{4}[a-z]{2}');
            self::assertMatchesRegularExpression('/^[A-Z]{2}\d{4}[a-z]{2}$/', $result);
        }
    }

    public function testRandomElementWithEmptyArray(): void
    {
        self::assertNull(Regexify::randomElement([]));
    }

    public function testRandomElementWithNonEmptyArray(): void
    {
        $items = ['alpha', 'beta', 'gamma'];
        $result = Regexify::randomElement($items);
        self::assertContains($result, $items);
    }

    public function testRandomLetter(): void
    {
        $letter = Regexify::randomLetter();
        self::assertMatchesRegularExpression('/^[a-z]$/', $letter);
    }

    public function testRandomAscii(): void
    {
        $ascii = Regexify::randomAscii();
        self::assertSame(1, strlen($ascii));
        $ord = ord($ascii);
        self::assertGreaterThanOrEqual(33, $ord);
        self::assertLessThanOrEqual(126, $ord);
    }
}
