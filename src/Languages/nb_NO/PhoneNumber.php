<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\nb_NO;

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

    /** @var array Norwegian phone number formats */
    protected array $formats = [
        '+47#########',
        '+47 ## ## ## ##',
        '## ## ## ##',
        '## ## ## ##',
        '########',
        '########',
        '9## ## ###',
        '4## ## ###',
        '9#######',
        '4#######',
    ];

    /** @var array Norweign mobile number formats */
    protected array $mobileFormats = [
        '+474#######',
        '+479#######',
        '9## ## ###',
        '4## ## ###',
        '9#######',
        '4#######',
    ];

    public function mobileNumber(): string
    {
        $format = $this->randomizer->randomElement($this->mobileFormats);

        return $this->replacer->numerify($this->generator->parse($format));
    }
}
