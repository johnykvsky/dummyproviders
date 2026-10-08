<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\nl_NL;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'hotmail.nl', 'live.nl', 'yahoo.nl'];
    protected array $tld = ['com', 'com', 'com', 'net', 'org', 'nl', 'nl', 'nl'];
}
