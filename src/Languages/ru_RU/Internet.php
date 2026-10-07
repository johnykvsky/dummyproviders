<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ru_RU;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['yandex.ru', 'ya.ru', 'narod.ru', 'gmail.com', 'outlook.com', 'mail.ru', 'list.ru', 'bk.ru', 'inbox.ru', 'rambler.ru', 'hotmail.com'];
    protected array $tld = ['com', 'com', 'net', 'org', 'ru', 'ru', 'ru', 'ru'];

}
