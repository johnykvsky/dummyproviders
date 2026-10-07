<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\es_PE;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '+51 9## ### ###',
        '+51 9########',
        '9## ### ###',
        '9########',
        '+51 1## ####',
        '+51 1######',
        '1## ####',
        '1######',
    ];

}
