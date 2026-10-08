<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\zh_CN;

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
        return $this->dateTime($until)->format('a') === 'am' ? '上午' : '下午';
    }

    public function dayOfWeek(\DateTimeInterface|string $until = 'now'): string
    {
        $map = [
            'Sunday' => '星期日',
            'Monday' => '星期一',
            'Tuesday' => '星期二',
            'Wednesday' => '星期三',
            'Thursday' => '星期四',
            'Friday' => '星期五',
            'Saturday' => '星期六',
        ];
        $week = $this->dateTime($until)->format('l');

        return $map[$week] ?? $week;
    }

    public function monthName(\DateTimeInterface|string $until = 'now'): string
    {
        $map = [
            'January' => '一月',
            'February' => '二月',
            'March' => '三月',
            'April' => '四月',
            'May' => '五月',
            'June' => '六月',
            'July' => '七月',
            'August' => '八月',
            'September' => '九月',
            'October' => '十月',
            'November' => '十一月',
            'December' => '十二月',
        ];
        $month = $this->dateTime($until)->format('F');

        return $map[$month] ?? $month;
    }
}
