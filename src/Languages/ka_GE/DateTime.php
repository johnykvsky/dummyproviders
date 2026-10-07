<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ka_GE;

use DummyGenerator\Clock\SystemClockInterface;
use DummyGenerator\Core\DateTime as BaseDateTime;

class DateTime extends BaseDateTime
{
    public function dayOfWeek($max = 'now'): string
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
        $week = $this->generator->dateTime($max)->format('l');

        return $map[$week] ?? $week;
    }

    public function monthName($max = 'now'): string
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
        $month = $this->generator->dateTime($max)->format('F');

        return $map[$month] ?? $month;
    }

}
