<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_NZ;

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

    /**
     * An array of en_NZ landline phone number formats
     */
    protected array $formats = [
        // National Calls
        '{{areaCode}}{{beginningNumber}}######',
        '{{areaCode}} {{beginningNumber}}## ####',
    ];

    /**
     * An array of en_NZ mobile (cell) phone number formats
     */
    protected array $mobileFormats = [
        // Local
        '02########',
        '02#########',
        '02# ### ####',
        '02# #### ####',
    ];

    /**
     * An array of toll free phone number formats
     */
    protected array $tollFreeFormats = [
        '0508######',
        '0508 ######',
        '0508 ### ###',
        '0800######',
        '0800 ######',
        '0800 ### ###',
    ];

    /**
     * An array of en_NZ landline area codes
     */
    protected array $areaCodes = [
        '02', '03', '04', '06', '07', '09',
    ];

    /**
     * An array of en_NZ landline beginning numbers
     */
    protected array $beginningNumbers = [
        '2', '3', '4', '5', '6', '7', '8', '9',
    ];

    /**
     * Return a en_NZ mobile phone number
     */
    public function mobileNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->mobileFormats));
    }

    /**
     * Return a en_NZ toll free phone number
     *
     * @return string
     */
    public function tollFreeNumber()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->tollFreeFormats));
    }

    /**
     * Return a en_NZ landline area code
     */
    public function areaCode(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->areaCodes));
    }

    /**
     * Return a en_NZ landline beginning number
     *
     * @return string
     */
    public function beginningNumber()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->beginningNumbers));
    }
}
