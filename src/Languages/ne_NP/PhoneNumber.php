<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ne_NP;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '01-4######',
        '01-5######',
        '01-6######',
        '9841######',
        '9849######',
        '98510#####',
        '9803######',
        '9808######',
        '9813######',
        '9818######',
    ];

}
