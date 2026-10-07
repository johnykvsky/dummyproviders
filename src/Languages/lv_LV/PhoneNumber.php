<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\lv_LV;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    /**
     * {@link} https://en.wikipedia.org/wiki/Telephone_numbers_in_Latvia
     */
    protected array $formats = [
        '########',
        '## ### ###',
        '+371 ########',
    ];

}
