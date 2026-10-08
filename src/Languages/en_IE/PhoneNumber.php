<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_IE;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    /** @var string[] */
    protected array $formats = [
        '+353 1 ### ####',
        '+353 21 ### ####',
        '+353 61 ### ####',
        '+353 91 ### ####',
        '+353 51 ### ####',
        '+353 56 ### ####',
        '+353 41 ### ####',
        '+353 71 ### ####',
        '+353 74 ### ####',
        '+353 66 ### ####',
        '+353 64 ### ####',
        '+353 ## ### ####',
        '01 ### ####',
        '021 ### ####',
        '061 ### ####',
        '091 ### ####',
        '0## ### ####',
    ];

    /** @var string[] */
    protected array $mobileFormats = [
        '083 ### ####',
        '085 ### ####',
        '086 ### ####',
        '087 ### ####',
        '089 ### ####',
    ];

    /** @var string[] */
    protected array $e164Formats = [
        '+353#########',
    ];

    /**
     * Return an Irish mobile phone number.
     */
    public function mobileNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->mobileFormats));
    }
}
