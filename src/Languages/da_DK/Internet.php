<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\da_DK;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    /** @var array Some safe email TLD. */
    protected array $safeEmailTld = [
        'org', 'com', 'net', 'dk', 'dk', 'dk',
    ];

    /** @var array Some email domains in Denmark. */
    protected array $freeEmailDomain = [
        'gmail.com', 'outlook.com', 'yahoo.com', 'yahoo.dk', 'hotmail.com', 'hotmail.dk', 'mail.dk', 'live.dk',
    ];

    /** @var array Some TLD. */
    protected array $tld = [
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'dk', 'dk', 'dk',
    ];
}
