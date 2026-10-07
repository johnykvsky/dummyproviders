<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\el_CY;

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
        '+3572#######',
        '+3579#######',
        '2#######',
        '9#######',
    ];

    /**
     * An array of el_CY mobile (cell) phone number formats.
     *
     * @var array
     */
    protected array $mobileFormats = [
        '9#######',
    ];

    /**
     * Return a el_CY mobile phone number.
     *
     * @return string
     */
    public function mobileNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->mobileFormats));
    }

}
