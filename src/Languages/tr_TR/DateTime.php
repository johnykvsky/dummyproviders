<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\tr_TR;

use DummyGenerator\Clock\SystemClockInterface;
use DummyGenerator\Core\DateTime as BaseDateTime;

class DateTime extends BaseDateTime
{
    public function amPm($max = 'now'): string
    {
        return $this->generator->dateTime($max)->format('a') === 'am' ? 'öö' : 'ös';
    }

    public function dayOfWeek($max = 'now'): string
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
        $week = $this->generator->dateTime($max)->format('l');

        return $map[$week] ?? $week;
    }

    public function monthName($max = 'now'): string
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
        $month = $this->generator->dateTime($max)->format('F');

        return $map[$month] ?? $month;
    }

}
