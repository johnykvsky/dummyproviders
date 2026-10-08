<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\lv_LV;

use DummyGenerator\Core\Color as BaseColor;

class Color extends BaseColor
{
    protected array $safeColorNames = [

        'balts', 'melns', 'sarkans', 'zaļš', 'dzeltens', 'zils',
        'brūns', 'purpurs', 'rozā', 'oranžs', 'pelēks',

    ];

    protected array $allColorNames = [
        'bēšs', 'palss šatens', 'bordo', 'marengo', 'mēļš', 'sirms', 'ruds', 'rūsgans',
        'ābolains', 'bērs', 'dūkans', 'loss', 'pāts', 'salns',
        'zelts', 'sudrabs', 'varš', 'bronza', 'zeltains', 'subrabains',
    ];
}
