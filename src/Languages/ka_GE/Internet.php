<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ka_GE;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = [
        'posta.ge', 'boom.ge', 'hotmail.com', 'gmail.com', 'outlook.com', 'yahoo.com', 'mail.ru', 'avoe.ge',
    ];

    protected array $tld = [
        'ge', 'ge', 'ge', 'ge', 'ge', 'com.ge', 'edu.ge', 'net.ge', 'org.ge',
        'pvt.ge', 'gov.ge', 'mil.ge', 'com', 'biz', 'info', 'net', 'org',
    ];
}
