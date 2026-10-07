<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\de_AT;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '0650 #######',
        '0660 #######',
        '0664 #######',
        '0676 #######',
        '0677 #######',
        '0678 #######',
        '0699 #######',
        '0680 #######',
        '+43 #### ####',
        '+43 #### ####-##',
    ];

    protected array $e164Formats = [
        '+43##########',
    ];

}
