<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\pl_PL\PlPlDefinitionPack;
use PHPUnit\Framework\TestCase;

class PlPlDateTimeTest extends TestCase
{
    public function testMonthNameValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $monthName = $generator->monthName();

        self::assertContains($monthName, [
            'styczeń', 'luty', 'marzec', 'kwiecień', 'maj', 'czerwiec', 'lipiec',
            'sierpień', 'wrzesień', 'październik', 'listopad', 'grudzień',
        ]);
    }

    public function testMonthNameGenitiveValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $monthNameGenitive = $generator->monthNameGenitive();

        self::assertContains($monthNameGenitive, [
            'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca',
            'sierpnia', 'września', 'października', 'listopada', 'grudnia',
        ]);
    }

    public function testDayOfWeekValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $dayOfWeek = $generator->dayOfWeek();

        self::assertContains($dayOfWeek, [
            'niedziela', 'poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota',
        ]);
    }

    public function testDayOfMonthRange(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $day = (int) $generator->dayOfMonth();

        self::assertGreaterThanOrEqual(1, $day);
        self::assertLessThanOrEqual(31, $day);
    }

    public function testFormattedDateFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $formattedDate = $generator->formattedDate();

        self::assertMatchesRegularExpression(
            '/^\d{1,2}\. (stycznia|lutego|marca|kwietnia|maja|czerwca|lipca|sierpnia|września|października|listopada|grudnia) \d{4}$/u',
            $formattedDate
        );
    }
}
