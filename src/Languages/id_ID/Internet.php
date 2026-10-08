<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\id_ID;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    /** @var array some email domains */
    protected array $freeEmailDomain = [
        'gmail.com', 'outlook.com', 'yahoo.com', 'gmail.co.id', 'yahoo.co.id',
    ];

    /**
     * General tld and local tld
     *
     * @see http://idwebhost.com/
     * @see http://domain.id/
     */
    protected array $tld = [
        'com', 'net', 'org', 'asia', 'tv', 'biz', 'info', 'in', 'name', 'co',
        'ac.id', 'sch.id', 'go.id', 'mil.id', 'co.id', 'or.id', 'web.id',
        'my.id', 'biz.id', 'desa.id', 'id',
    ];
}
