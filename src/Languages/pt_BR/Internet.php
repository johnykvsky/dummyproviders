<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\pt_BR;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'uol.com.br', 'terra.com.br', 'ig.com.br', 'r7.com'];
    protected array $tld = ['com', 'com', 'com.br', 'com.br', 'net', 'net.br', 'br', 'org'];

}
