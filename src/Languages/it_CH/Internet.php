<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\it_CH;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'hotmail.com', 'yahoo.com', 'googlemail.com', 'gmx.ch', 'bluewin.ch', 'swissonline.ch'];
    protected array $tld = ['com', 'com', 'com', 'net', 'org', 'li', 'ch', 'ch'];
}
