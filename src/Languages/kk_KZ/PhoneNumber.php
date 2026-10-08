<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\kk_KZ;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '+7 (701) #######',
        '+7 (702) #######',
        '+7 (705) #######',
        '+7 (707) #######',
        '+7 (727) 239####',
        '+7 (747) #######',
        '+7 (7172) 745###',
    ];
}
