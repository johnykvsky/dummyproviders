<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\es_ES;

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
        '+34 9## ## ####',
        '+34 9## ######',
        '+34 9########',
        '+34 9##-##-####',
        '+34 9##-######',
        '9## ## ####',
        '9## ######',
        '9########',
        '9##-##-####',
        '9##-######',
    ];

    protected array $mobileFormats = [
        '+34 6## ## ####',
        '+34 6## ######',
        '+34 6########',
        '+34 6##-##-####',
        '+34 6##-######',
        '6## ## ####',
        '6## ######',
        '6########',
        '6##-##-####',
        '6##-######',
    ];

    protected array $tollFreeFormats = [
        '900 ### ###',
        '800 ### ###',
    ];

    public function mobileNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->mobileFormats));
    }

    public function tollFreeNumber()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->tollFreeFormats));
    }
}
