<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_AU;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'gmail.com.au', 'yahoo.com.au', 'hotmail.com.au'];
    protected array $tld = ['com', 'com.au', 'org', 'org.au', 'net', 'net.au', 'biz', 'info', 'edu', 'edu.au'];
}
