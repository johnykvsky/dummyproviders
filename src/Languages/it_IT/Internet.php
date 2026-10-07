<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\it_IT;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'email.it', 'libero.it', 'yahoo.it', 'outlook.it'];
    protected array $tld = ['com', 'com', 'com', 'net', 'org', 'it', 'it', 'it'];
}
