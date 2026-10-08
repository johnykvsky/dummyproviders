<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ka_GE;

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

    public function dayOfWeek(\DateTimeInterface|string $until = 'now'): string
    {
        $map = [
            'Sunday' => 'კვირა',
            'Monday' => 'ორშაბათი',
            'Tuesday' => 'სამშაბათი',
            'Wednesday' => 'ოთხშაბათი',
            'Thursday' => 'ხუთშაბათი',
            'Friday' => 'პარასკევი',
            'Saturday' => 'შაბათი',
        ];
        $week = $this->dateTime($until)->format('l');

        return $map[$week] ?? $week;
    }

    public function monthName(\DateTimeInterface|string $until = 'now'): string
    {
        $map = [
            'January' => 'იანვარი',
            'February' => 'თებერვალი',
            'March' => 'მარტი',
            'April' => 'აპრილი',
            'May' => 'მაისი',
            'June' => 'ივნისი',
            'July' => 'ივლისი',
            'August' => 'აგვისტო',
            'September' => 'სექტემბერი',
            'October' => 'ოქტომბერი',
            'November' => 'ნოემბერი',
            'December' => 'დეკემბერი',
        ];
        $month = $this->dateTime($until)->format('F');

        return $map[$month] ?? $month;
    }
}
