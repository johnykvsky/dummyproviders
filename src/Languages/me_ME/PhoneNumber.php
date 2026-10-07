<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\me_ME;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '+38220#####',
        '+38267#####',
        '+38269#####',
        '+382679#####',
        '+38268#####',
        '+38240#####',
    ];

}
