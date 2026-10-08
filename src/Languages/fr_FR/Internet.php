<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fr_FR;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'hotmail.fr', 'yahoo.fr', 'laposte.net', 'free.fr', 'sfr.fr', 'orange.fr', 'club-internet.fr', 'dbmail.com', 'live.com', 'noos.fr', 'tele2.fr', 'wanadoo.fr'];
    protected array $tld = ['com', 'com', 'com', 'net', 'org', 'fr', 'fr', 'fr'];
}
