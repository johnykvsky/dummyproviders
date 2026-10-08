<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fi_FI;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'jippii.fi', 'luukku.com'];
    protected array $tld = ['com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'fi'];
}
