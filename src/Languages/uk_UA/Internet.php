<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\uk_UA;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $tld = ['ua', 'com.ua', 'org.ua', 'net.ua', 'com', 'net', 'org'];
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'mail.ru', 'ukr.net', 'i.ua', 'rambler.ru'];
}
