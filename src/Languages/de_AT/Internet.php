<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\de_AT;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['aon.at', 'chello.at', 'gmail.com', 'outlook.com', 'gmx.at', 'univie.ac.at'];
    protected array $tld = ['at', 'co.at', 'com', 'net', 'org'];
}
