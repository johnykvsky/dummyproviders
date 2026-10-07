<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\he_IL;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '05#-#######',
        '0#-#######',
        '972-5#-#######',
        '972-#-########',
        '0#########',
    ];

}
