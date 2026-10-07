<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\is_IS;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    /**
     * @var array Icelandic phone number formats.
     */
    protected array $formats = [
        '+354 ### ####',
        '+354 #######',
        '+354#######',
        '### ####',
        '#######',
    ];

}
