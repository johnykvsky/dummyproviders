<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\hy_AM;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'yandex.ru', 'mail.ru', 'mail.am'];
    protected array $tld = ['com', 'com', 'am', 'am', 'am', 'net', 'org', 'ru', 'am', 'am', 'am'];
}
