<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\tr_TR;

use DummyGenerator\Clock\SystemClockInterface;
use DummyGenerator\Core\DateTime as BaseDateTime;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\GeneratorInterface;

class DateTime extends BaseDateTime
{
    private GeneratorInterface $generator;

    public function __construct(
        RandomizerInterface $randomizer,
        SystemClockInterface $clock,
        GeneratorInterface $generator,
    ) {
        parent::__construct($randomizer, $clock);

        $this->generator = $generator;
    }

    public function amPm(\DateTimeInterface|string $until = 'now'): string
    {
        return $this->dateTime($until)->format('a') === 'am' ? 'öö' : 'ös';
    }

    public function dayOfWeek(\DateTimeInterface|string $until = 'now'): string
    {
        $map = [
            'Sunday' => 'Pazar',
            'Monday' => 'Pazartesi',
            'Tuesday' => 'Salı',
            'Wednesday' => 'Çarşamba',
            'Thursday' => 'Perşembe',
            'Friday' => 'Cuma',
            'Saturday' => 'Cumartesi',
        ];
        $week = $this->dateTime($until)->format('l');

        return $map[$week] ?? $week;
    }

    public function monthName(\DateTimeInterface|string $until = 'now'): string
    {
        $map = [
            'January' => 'Ocak',
            'February' => 'Şubat',
            'March' => 'Mart',
            'April' => 'Nisan',
            'May' => 'Mayıs',
            'June' => 'Haziran',
            'July' => 'Temmuz',
            'August' => 'Ağustos',
            'September' => 'Eylül',
            'October' => 'Ekim',
            'November' => 'Kasım',
            'December' => 'Aralık',
        ];
        $month = $this->dateTime($until)->format('F');

        return $map[$month] ?? $month;
    }
}
