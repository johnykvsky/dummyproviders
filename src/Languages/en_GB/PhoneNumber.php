<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_GB;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $formats = [
        '+44(0)##########',
        '+44(0)#### ######',
        '+44(0)#########',
        '+44(0)#### #####',
        '0##########',
        '0#########',
        '0#### ######',
        '0#### #####',
        '0### ### ####',
        '0### #######',
        '(0####) ######',
        '(0####) #####',
        '(0###) ### ####',
        '(0###) #######',
    ];

    /**
     * An array of en_GB mobile (cell) phone number formats
     */
    protected array $mobileFormats = [
        // Local
        '07#########',
        '07### ######',
        '07### ### ###',
    ];

    protected array $e164Formats = [
        '+44##########',
    ];

    /**
     * Return a en_GB mobile phone number
     */
    public function mobileNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->mobileFormats));
    }
}
