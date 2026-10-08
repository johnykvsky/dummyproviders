<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\gl_ES;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    /** @var string[] */
    protected array $freeEmailDomain = ['gmail.com', 'hotmail.com', 'hotmail.es', 'outlook.com', 'outlook.es', 'yahoo.com', 'yahoo.es', 'mundo-r.com', 'telefonica.net'];

    /** @var string[] */
    protected array $tld = ['com', 'com', 'com', 'net', 'org', 'es', 'es', 'es', 'gal', 'gal'];
}
