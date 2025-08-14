<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\pl_PL;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    /** @var array<string> */
    protected array $formats = [
        '+48 ## ### ## ##',
        '0048 ## ### ## ##',
        '### ### ###',
        '+48 ### ### ###',
        '0048 ### ### ###',
        '#########',
        '(##) ### ## ##',
        '+48(##)#######',
        '0048(##)#######',
    ];
}
