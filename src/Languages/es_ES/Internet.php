<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\es_ES;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'hotmail.com', 'hotmail.es', 'yahoo.com', 'yahoo.es'];
    protected array $tld = ['com', 'com', 'com', 'com', 'net', 'org', 'org', 'es', 'es', 'es', 'com.es'];
}
