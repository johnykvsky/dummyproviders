<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_SG;

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

    protected array $internationalCodePrefix = [
        '+65',
        '65',
    ];

    protected array $zeroToEight = [0, 1, 2, 3, 4, 5, 6, 7, 8];

    protected array $oneToEight = [1, 2, 3, 4, 5, 6, 7, 8];

    protected array $mobileNumberFormats = [
        '{{internationalCodePrefix}}9{{zeroToEight}}## ####',
        '{{internationalCodePrefix}} 9{{zeroToEight}}## ####',
        '9{{zeroToEight}}## ####',
        '{{internationalCodePrefix}}8{{oneToEight}}## ####',
        '{{internationalCodePrefix}} 8{{oneToEight}}## ####',
        '8{{oneToEight}}## ####',
    ];

    protected array $fixedLineNumberFormats = [
        '{{internationalCodePrefix}}6### ####',
        '{{internationalCodePrefix}} 6### ####',
        '6### ####',
    ];

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    protected array $formats = [
        '{{mobileNumber}}',
        '{{fixedLineNumber}}',
    ];

    protected array $voipNumber = [
        '{{internationalCodePrefix}}3### ####',
        '{{internationalCodePrefix}} 3### ####',
        '3### ####',
    ];

    protected array $tollFreeInternationalNumber = [
        '800 ### ####',
    ];

    protected array $tollFreeLineNumber = [
        '1800 ### ####',
    ];

    protected array $premiumPhoneNumber = [
        '1900 ### ####',
    ];

    public function tollFreeInternationalNumber()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->tollFreeInternationalNumber));
    }

    public function tollFreeLineNumber()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->tollFreeLineNumber));
    }

    public function premiumPhoneNumber()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->premiumPhoneNumber));
    }

    public function mobileNumber(): string
    {
        $format = $this->randomizer->randomElement($this->mobileNumberFormats);

        return $this->replacer->numerify($this->generator->parse($format));
    }

    public function fixedLineNumber()
    {
        $format = $this->randomizer->randomElement($this->fixedLineNumberFormats);

        return $this->replacer->numerify($this->generator->parse($format));
    }

    public function voipNumber()
    {
        $format = $this->randomizer->randomElement($this->voipNumber);

        return $this->replacer->numerify($this->generator->parse($format));
    }

    public function internationalCodePrefix()
    {
        return $this->randomizer->randomElement($this->internationalCodePrefix);
    }

    public function zeroToEight()
    {
        return $this->randomizer->randomElement($this->zeroToEight);
    }

    public function oneToEight()
    {
        return $this->randomizer->randomElement($this->oneToEight);
    }
}
