<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\mn_MN;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '9#######',
        '8#######',
        '7#######',
        '3#####',
    ];
}
