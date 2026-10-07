<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\cs_CZ;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'seznam.cz', 'atlas.cz', 'centrum.cz', 'email.cz', 'post.cz'];
    protected array $tld = ['cz', 'cz', 'cz', 'cz', 'cz', 'cz', 'com', 'info', 'net', 'org'];

}
