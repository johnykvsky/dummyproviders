<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\lt_LT;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '06#######',
        '0 6## #####',
        '+370 6## ## ###',
        '+3706#######',
        '(0 5) ### ####',
        '+370 5 ### ####',
        '+370 46 ## ## ##',
        '(0 46) ## ## ##',
    ];
}
