<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\is_IS;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    /** @var array Some email domains in Denmark. */
    protected array $freeEmailDomain = [
        'gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'visir.is', 'simnet.is', 'internet.is',
    ];

    /** @var array Some TLD. */
    protected array $tld = [
        'com', 'com', 'com', 'net', 'is', 'is', 'is',
    ];
}
