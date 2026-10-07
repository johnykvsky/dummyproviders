<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\hr_HR;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '+385 91 ### ####',
        '+385 92 ### ####',
        '+385 95 ### ####',
        '+385 98 ### ####',
        '+385 99 ### ####',
    ];

}
