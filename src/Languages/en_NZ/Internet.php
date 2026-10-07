<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_NZ;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    /**
     * An array of New Zealand TLDs.
     *
     * @see https://en.wikipedia.org/wiki/.nz
     *
     * @var array
     */
    protected array $tld = [
        'com', 'nz', 'ac.nz', 'co.nz', 'geek.nz', 'gen.nz', 'kiwi.nz', 'maori.nz', 'net.nz', 'org.nz', 'school.nz', 'cri.nz', 'govt.nz', 'health.nz', 'iwi.nz', 'mil.nz', 'parliament.nz',
    ];

}
