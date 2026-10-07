<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\es_VE;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'hotmail.com', 'hotmail.es', 'yahoo.com', 'yahoo.es'];
    protected array $tld = ['com', 'com.ve', 'net', 'net.ve', 'org', 'org.ve', 'info.ve', 'co.ve', 'web.ve'];
}
