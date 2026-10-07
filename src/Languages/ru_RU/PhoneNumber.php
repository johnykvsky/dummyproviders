<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ru_RU;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '(812) ###-##-##',
        '(495) ###-####',
        '+7 (922) ###-####',
        '(35222) ##-####',
        '8-800-###-####',
    ];

}
