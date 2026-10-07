<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\it_CH;

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
        '+41 (0)## ### ## ##',
        '+41(0)#########',
        '+41 ## ### ## ##',
        '0#########',
        '0## ### ## ##',
    ];

    /**
     * An array of Swiss mobile (cell) phone number formats.
     *
     * @var array
     */
    protected array $mobileFormats = [
        // Local
        '075 ### ## ##',
        '075#######',
        '076 ### ## ##',
        '076#######',
        '077 ### ## ##',
        '077#######',
        '078 ### ## ##',
        '078#######',
        '079 ### ## ##',
        '079#######',
    ];

    /**
     * Return a Swiss mobile phone number.
     *
     * @return string
     */
    public function mobileNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->mobileFormats));
    }

}
