<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\sl_SI;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'gmail.com', 'gmail.com', 'hotmail.com', 'yahoo.com', 'siol.net', 't-2.net'];

    protected array $tld = ['si', 'si', 'si', 'si', 'eu', 'com', 'info', 'net', 'org'];
}
