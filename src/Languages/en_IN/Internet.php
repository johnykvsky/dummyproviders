<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_IN;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'yahoo.co.in', 'rediffmail.com'];
    protected array $tld = ['com', 'com', 'com', 'com', 'com', 'com', 'in', 'in', 'in', 'ac.in', 'net', 'org', 'co.in'];

}
