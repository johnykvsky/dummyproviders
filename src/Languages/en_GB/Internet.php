<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_GB;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com', 'gmail.co.uk', 'yahoo.co.uk', 'hotmail.co.uk'];
    protected array $tld = ['com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'co.uk'];
}
