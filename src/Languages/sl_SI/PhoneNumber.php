<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\sl_SI;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '+386 ## ### ###',
        '00386 ## ### ###',
        '0## ### ###',
        '00386########',
        '+386########',
        '0########',
        '+386 # ### ####',
        '00386 # ### ####',
        '0# ### ####',
    ];

}
