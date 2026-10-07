<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_UG;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'gmail.co.ug', 'yahoo.co.ug', 'hotmail.co.ug'];
    protected array $tld = ['com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'co.ug', 'ug'];

}
