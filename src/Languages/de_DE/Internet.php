<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\de_DE;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    /**
     * @see https://www.statista.com/statistics/446418/most-popular-e-mail-providers-germany/
     * @see http://blog.shuttlecloud.com/the-10-most-popular-email-providers-in-germany
     */
    protected array $freeEmailDomain = [
        'web.de',
        'gmail.com', 'outlook.com',
        'hotmail.de',
        'yahoo.de',
        'googlemail.com',
        'aol.de',
        'gmx.de',
        'freenet.de',
        'posteo.de',
        'mail.de',
        'live.de',
        't-online.de',
    ];
    protected array $tld = ['com', 'com', 'com', 'net', 'org', 'de', 'de', 'de'];

}
