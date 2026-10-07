<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\pt_PT;

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
     * @see http://en.wikipedia.org/wiki/Telephone_numbers_in_Portugal
     */
    protected array $formats = [
        '+351 91#######',
        '+351 92#######',
        '+351 93#######',
        '+351 96#######',
        '+351 21#######',
        '+351 22#######',
        '+351 23#######',
        '+351 24#######',
        '+351 25#######',
        '+351 26#######',
        '+351 27#######',
        '+351 28#######',
        '+351 29#######',
        '91#######',
        '92#######',
        '93#######',
        '96#######',
        '21#######',
        '22#######',
        '23#######',
        '24#######',
        '25#######',
        '26#######',
        '27#######',
        '28#######',
        '29#######',
    ];

    protected array $mobileNumberPrefixes = [
        '91#######',
        '92#######',
        '93#######',
        '96#######',
    ];

    public function mobileNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->mobileNumberPrefixes));
    }

}
