<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ms_MY;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;
use DummyGenerator\Definitions\Calculator\LuhnCalculatorInterface;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

class PhoneNumber extends BasePhoneNumber
{
    private GeneratorInterface $generator;

    public function __construct(
        RandomizerInterface $randomizer,
        ReplacerInterface $replacer,
        LuhnCalculatorInterface $luhnCalculator,
        GeneratorInterface $generator,
    ) {
        parent::__construct($randomizer, $replacer, $luhnCalculator);

        $this->generator = $generator;
    }

    protected array $formats = [
        '{{mobileNumber}}',
        '{{fixedLineNumber}}',
        '{{voipNumber}}',
    ];

    protected array $plusSymbol = [
        '+',
    ];

    protected array $countryCodePrefix = [
        '6',
    ];

    /** @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony */
    protected array $zeroOneOnePrefix = ['10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '22', '23', '32'];
    protected array $zeroOneFourPrefix = ['2', '3', '4', '5', '6', '7', '8', '9'];
    protected array $zeroOneFivePrefix = ['1', '2', '3', '4', '5', '6', '9'];

    /** @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony */
    protected array $mobileNumberFormatsWithFormatting = [
        '010-### ####',
        '011-{{zeroOneOnePrefix}}## ####',
        '012-### ####',
        '013-### ####',
        '014-{{zeroOneFourPrefix}}## ####',
        '016-### ####',
        '017-### ####',
        '018-### ####',
        '019-### ####',
    ];

    protected array $mobileNumberFormats = [
        '010#######',
        '011{{zeroOneOnePrefix}}######',
        '012#######',
        '013#######',
        '014{{zeroOneFourPrefix}}######',
        '016#######',
        '017#######',
        '018#######',
        '019#######',
    ];

    /** @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Geographic_area_codes */
    protected array $fixedLineNumberFormatsWithFormatting = [
        '03-#### ####',
        '04-### ####',
        '05-### ####',
        '06-### ####',
        '07-### ####',
        '08#-## ####',
        '09-### ####',
    ];

    protected array $fixedLineNumberFormats = [
        '03########',
        '04#######',
        '05#######',
        '06#######',
        '07#######',
        '08#######',
        '09#######',
    ];

    /** @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony */
    protected array $voipNumberWithFormatting = [
        '015-{{zeroOneFivePrefix}}## ####',
    ];

    protected array $voipNumber = [
        '015{{zeroOneFivePrefix}}######',
    ];

    /**
     * Return a Malaysian Mobile Phone Number.
     *
     * @param bool $countryCodePrefix true, false
     * @param bool $formatting        true, false
     *
     * @example '+6012-345-6789'
     */
    public function mobileNumber($countryCodePrefix = true, $formatting = true): string
    {
        $format = $formatting ? $this->randomizer->randomElement($this->mobileNumberFormatsWithFormatting) : $this->randomizer->randomElement($this->mobileNumberFormats);

        if ($countryCodePrefix) {
            return $this->countryCodePrefix($formatting) . $this->replacer->numerify($this->generator->parse($format));
        }

        return $this->replacer->numerify($this->generator->parse($format));
    }

    /**
     * Return prefix digits for 011 numbers
     *
     * @return string
     *
     * @example '10'
     */
    public function zeroOneOnePrefix()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->zeroOneOnePrefix));
    }

    /**
     * Return prefix digits for 014 numbers
     *
     * @return string
     *
     * @example '2'
     */
    public function zeroOneFourPrefix()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->zeroOneFourPrefix));
    }

    /**
     * Return prefix digits for 015 numbers
     *
     * @return string
     *
     * @example '1'
     */
    public function zeroOneFivePrefix()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->zeroOneFivePrefix));
    }

    /**
     * Return a Malaysian Fixed Line Phone Number.
     *
     * @param bool $countryCodePrefix true, false
     * @param bool $formatting        true, false
     * @return string
     *
     * @example '+603-4567-8912'
     */
    public function fixedLineNumber($countryCodePrefix = true, $formatting = true)
    {
        $format = $formatting ? $this->randomizer->randomElement($this->fixedLineNumberFormatsWithFormatting) : $this->randomizer->randomElement($this->fixedLineNumberFormats);

        if ($countryCodePrefix) {
            return $this->countryCodePrefix($formatting) . $this->replacer->numerify($this->generator->parse($format));
        }

        return $this->replacer->numerify($this->generator->parse($format));
    }

    /**
     * Return a Malaysian VoIP Phone Number.
     *
     * @param bool $countryCodePrefix true, false
     * @param bool $formatting        true, false
     * @return string
     *
     * @example '+6015-678-9234'
     */
    public function voipNumber($countryCodePrefix = true, $formatting = true)
    {
        $format = $formatting ? $this->randomizer->randomElement($this->voipNumberWithFormatting) : $this->randomizer->randomElement($this->voipNumber);

        if ($countryCodePrefix) {
            return $this->countryCodePrefix($formatting) . $this->replacer->numerify($this->generator->parse($format));
        }

        return $this->replacer->numerify($this->generator->parse($format));
    }

    /**
     * Return a Malaysian Country Code Prefix.
     *
     * @param bool $formatting true, false
     * @return string
     *
     * @example '+6'
     */
    public function countryCodePrefix($formatting = true)
    {
        if ($formatting) {
            return $this->randomizer->randomElement($this->plusSymbol) . $this->randomizer->randomElement($this->countryCodePrefix);
        }

        return $this->randomizer->randomElement($this->countryCodePrefix);
    }
}
