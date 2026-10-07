<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_IE;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    /** @var string[] */
    protected array $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com'];

    /** @var string[] */
    protected array $tld = ['com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'ie', 'co.ie'];
}
