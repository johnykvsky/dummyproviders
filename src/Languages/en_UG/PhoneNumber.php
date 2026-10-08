<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_UG;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '+256 7## ### ###',
        '+2567########',
        '+256 4## ### ###',
        '+2564########',
        '07## ### ###',
        '07########',
        '04## ### ###',
        '04########',
    ];
}
