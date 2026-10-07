<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\tr_TR;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'hotmail.com', 'yahoo.com', 'yandex.com.tr', 'mynet.com', 'turk.net', 'superposta.com'];
    protected array $tld = ['com', 'com', 'com', 'com', 'com.tr', 'com.tr', 'info', 'net', 'org', 'org.tr', 'edu', 'edu.tr', 'edu.tr'];

}
