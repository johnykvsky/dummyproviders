<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_AU;

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
        // Local calls
        '#### ####',
        '####-####',
        '####.####',
        '########',

        // National dialing
        '0{{areaCode}} #### ####',
        '0{{areaCode}}-####-####',
        '0{{areaCode}}.####.####',
        '0{{areaCode}}########',

        // Optional parenthesis
        '(0{{areaCode}}) #### ####',
        '(0{{areaCode}})-####-####',
        '(0{{areaCode}}).####.####',
        '(0{{areaCode}})########',

        // International drops the 0
        '+61 {{areaCode}} #### ####',
        '+61-{{areaCode}}-####-####',
        '+61.{{areaCode}}.####.####',
        '+61{{areaCode}}########',
    ];

    // 04 Mobile telephones (Australia-wide) mostly commonly written 4 - 3 - 3 instead of 2 - 4 - 4
    protected array $mobileFormats = [
        '04## ### ###',
        '04##-###-###',
        '04##.###.###',
        '+61 4## ### ###',
        '+61-4##-###-###',
        '+61.4##.###.###',
    ];

    protected array $areacodes = [
        '2', '3', '7', '8',
    ];

    public function mobileNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->mobileFormats));
    }

    public function areaCode(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->areacodes));
    }

}
