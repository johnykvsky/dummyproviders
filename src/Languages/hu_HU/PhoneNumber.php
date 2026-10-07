<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\hu_HU;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '+36-##-###-####',
        '+36#########',
        '+36(##)###-###',
        '06-##-###-####',
        '06(##)###-###',
    ];

}
