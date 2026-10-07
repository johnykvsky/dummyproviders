<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_NG;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $tld = ['com.ng', 'com', 'ng', 'net', 'edu.ng', 'org', 'gov.ng', 'org.ng', 'biz', 'co'];

}
