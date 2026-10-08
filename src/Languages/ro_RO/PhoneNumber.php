<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ro_RO;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    protected array $normalFormats = [
        'landline' => [
            '021#######', // Bucharest
            '023#######',
            '024#######',
            '025#######',
            '026#######',
            '027#######', // non-geographic
            '031#######', // Bucharest
            '033#######',
            '034#######',
            '035#######',
            '036#######',
            '037#######', // non-geographic
        ],
        'mobile' => [
            '07########',
        ],
    ];

    protected array $specialFormats = [
        'toll-free' => [
            '0800######',
            '0801######', // shared-cost numbers
            '0802######', // personal numbering
            '0806######', // virtual cards
            '0807######', // pre-paid cards
            '0870######', // internet dial-up
        ],
        'premium-rate' => [
            '0900######',
            '0903######', // financial information
            '0906######', // adult entertainment
        ],
    ];

    /** @see http://en.wikipedia.org/wiki/Telephone_numbers_in_Romania#Last_years */
    public function phoneNumber(): string
    {
        $type = $this->randomizer->randomElement(array_keys($this->normalFormats));

        return $this->replacer->numerify($this->randomizer->randomElement($this->normalFormats[$type]));
    }

    public function tollFreePhoneNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->specialFormats['toll-free']));
    }

    public function premiumRatePhoneNumber()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->specialFormats['premium-rate']));
    }
}
