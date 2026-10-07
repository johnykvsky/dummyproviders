<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ckb_IQ;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    /**
     * @var string[]
     *
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Iraq
     */
    protected array $formats = [
        '066######',
        '053######',
        '062######',
        '050######',
    ];

    /**
     * @var string[]
     *
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Iraq
     */
    protected array $mobileNumberPrefixes = [
        '0750#######',
        '0751#######',
        '0770#######',
        '0771#######',
        '0772#######',
        '0773#######',
        '0780#######',
        '0781#######',
        '0790#######',
    ];

    /** @example '0750xxxxxxx' */
    public function mobileNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->mobileNumberPrefixes));
    }
}
