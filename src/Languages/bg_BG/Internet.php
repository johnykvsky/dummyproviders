<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\bg_BG;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'mail.bg', 'abv.bg', 'dir.bg'];
    protected array $tld = ['bg', 'bg', 'bg', 'bg', 'bg', 'bg', 'com', 'biz', 'info', 'net', 'org'];
}
