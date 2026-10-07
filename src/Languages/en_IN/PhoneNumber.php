<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_IN;

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
        '+91 ## ########',
        '+91 ### #######',
        '0## ########',
        '0### #######',
    ];

    /**
     * An array of en_IN mobile (cell) phone number formats
     *
     * @var array
     */
    protected array $mobileFormats = [
        '+91 9#########',
        '+91 8#########',
        '+91 7#########',
        '09#########',
        '08#########',
        '07#########',
    ];

    /**
     * Return a en_IN mobile phone number
     *
     * @return string
     */
    public function mobileNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->mobileFormats));
    }

}
