<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\el_CY;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'cablenet.com.cy', 'cytanet.com.cy', 'primehome.com'];
    protected array $tld = ['com.cy', 'com.cy', 'com.cy', 'com.cy', 'com.cy', 'com.cy', 'biz', 'info', 'net', 'org'];
}
