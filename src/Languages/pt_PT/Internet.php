<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\pt_PT;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'sapo.pt', 'clix.pt', 'mail.pt'];
    protected array $tld = ['com', 'com', 'pt', 'pt', 'net', 'org', 'eu'];
}
