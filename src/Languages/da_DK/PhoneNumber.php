<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\da_DK;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    /** @var array Danish phonenumber formats. */
    protected array $formats = [
        '+45 ## ## ## ##',
        '+45 #### ####',
        '+45########',
        '## ## ## ##',
        '#### ####',
        '########',
    ];
}
