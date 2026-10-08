<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\sk_SK;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'zoznam.sk', 'atlas.sk', 'centrum.sk', 'azet.sk', 'post.sk'];
    protected array $tld = ['sk', 'sk', 'sk', 'sk', 'sk', 'sk', 'eu', 'com', 'info', 'net', 'org'];
}
