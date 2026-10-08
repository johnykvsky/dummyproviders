<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_HK;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = [
        'gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'yahoo.com.hk', 'hotmail.com.hk',
    ];
    protected array $tld = [
        'com', 'com', 'com', 'com.hk', 'com.hk', 'com', 'biz', 'info', 'net', 'org',
        'com.hk', 'edu.hk', 'org.hk', 'idv.hk',
    ];
}
