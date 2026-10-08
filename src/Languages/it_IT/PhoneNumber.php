<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\it_IT;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '+## ### ## ## ####',
        '+## ## #######',
        '+## ## ########',
        '+## ### #######',
        '+## ### ########',
        '+## #### #######',
        '+## #### ########',
        // According to http://it.wikipedia.org/wiki/Prefisso_telefonico#Elenco_degli_indicativi_in_Italia.2C_a_San_Marino_e_nel_Vaticano
        '0## ### ####',
        '+39 0## ### ###',
        '3## ### ###',
        '+39 3## ### ###',
    ];
}
