<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\nl_BE;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'hotmail.com', 'yahoo.com', 'advalvas.be'];
    protected array $tld = ['com', 'com', 'com', 'net', 'org', 'be', 'be', 'be'];

}
