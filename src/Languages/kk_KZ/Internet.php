<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\kk_KZ;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['outlook.com', 'mail.kz', 'yandex.kz', 'host.kz'];
    protected array $tld = ['com', 'com', 'net', 'org', 'kz', 'kz', 'kz', 'kz'];
}
