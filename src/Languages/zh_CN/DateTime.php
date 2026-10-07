<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\zh_CN;

use DummyGenerator\Clock\SystemClockInterface;
use DummyGenerator\Core\DateTime as BaseDateTime;

class DateTime extends BaseDateTime
{
    public function amPm($max = 'now'): string
    {
        return $this->generator->dateTime($max)->format('a') === 'am' ? '上午' : '下午';
    }

    public function dayOfWeek($max = 'now'): string
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
        $week = $this->generator->dateTime($max)->format('l');

        return $map[$week] ?? $week;
    }

    public function monthName($max = 'now'): string
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
        $month = $this->generator->dateTime($max)->format('F');

        return $map[$month] ?? $month;
    }

}
