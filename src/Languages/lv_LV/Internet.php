<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\lv_LV;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['mail.lv', 'apollo.lv', 'inbox.lv', 'gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com'];
    protected array $tld = ['com', 'com', 'net', 'org', 'lv', 'lv', 'lv', 'lv'];
}
