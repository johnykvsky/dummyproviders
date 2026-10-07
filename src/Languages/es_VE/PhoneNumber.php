<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\es_VE;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '+58 2## ### ####',
        '+58 2## #######',
        '+58 2#########',
        '+58 2##-###-####',
        '+58 2##-#######',
        '2## ### ####',
        '2## #######',
        '2#########',
        '2##-###-####',
        '2##-#######',
        '+58 4## ### ####',
        '+58 4## #######',
        '+58 4#########',
        '+58 4##-###-####',
        '+58 4##-#######',
        '4## ### ####',
        '4## #######',
        '4#########',
        '4##-###-####',
        '4##-#######',
    ];

}
