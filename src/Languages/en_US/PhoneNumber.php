<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_US;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;
use DummyGenerator\Definitions\Calculator\LuhnCalculatorInterface;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;
use DummyGenerator\Provider\Regexify;

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

    /** @var array<int, string> */
    protected array $areaCodeRegexes = [
        2 => '(0[1-35-9]|1[02-9]|2[03-589]|3[149]|4[08]|5[1-46]|6[0279]|7[0269]|8[13])',
        3 => '(0[1-57-9]|1[02-9]|2[0135]|3[0-24679]|4[167]|5[12]|6[014]|8[056])',
        4 => '(0[124-9]|1[02-579]|2[3-5]|3[0245]|4[0235]|58|6[39]|7[0589]|8[04])',
        5 => '(0[1-57-9]|1[0235-8]|20|3[0149]|4[01]|5[19]|6[1-47]|7[013-5]|8[056])',
        6 => '(0[1-35-9]|1[024-9]|2[03689]|[34][016]|5[017]|6[0-279]|78|8[0-29])',
        7 => '(0[1-46-8]|1[2-9]|2[04-7]|3[1247]|4[037]|5[47]|6[02359]|7[02-59]|8[156])',
        8 => '(0[1-68]|1[02-8]|2[08]|3[0-28]|4[3578]|5[046-9]|6[02-5]|7[028])',
        9 => '(0[1346-9]|1[02-9]|2[0589]|3[0146-8]|4[0179]|5[12469]|7[0-389]|8[04-69])',
    ];

    /** @see https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers#United_States.2C_Canada.2C_and_other_NANP_countries */
    protected array $formats = [
        // International format
        '+1-{{areaCode}}-{{exchangeCode}}-####',
        '+1 ({{areaCode}}) {{exchangeCode}}-####',
        '+1-{{areaCode}}-{{exchangeCode}}-####',
        '+1.{{areaCode}}.{{exchangeCode}}.####',
        '+1{{areaCode}}{{exchangeCode}}####',

        // Standard formats
        '{{areaCode}}-{{exchangeCode}}-####',
        '({{areaCode}}) {{exchangeCode}}-####',
        '1-{{areaCode}}-{{exchangeCode}}-####',
        '{{areaCode}}.{{exchangeCode}}.####',

        '{{areaCode}}-{{exchangeCode}}-####',
        '({{areaCode}}) {{exchangeCode}}-####',
        '1-{{areaCode}}-{{exchangeCode}}-####',
        '{{areaCode}}.{{exchangeCode}}.####',
    ];

    protected array $formatsWithExtension = [
        '{{areaCode}}-{{exchangeCode}}-#### x###',
        '({{areaCode}}) {{exchangeCode}}-#### x###',
        '1-{{areaCode}}-{{exchangeCode}}-#### x###',
        '{{areaCode}}.{{exchangeCode}}.#### x###',

        '{{areaCode}}-{{exchangeCode}}-#### x####',
        '({{areaCode}}) {{exchangeCode}}-#### x####',
        '1-{{areaCode}}-{{exchangeCode}}-#### x####',
        '{{areaCode}}.{{exchangeCode}}.#### x####',

        '{{areaCode}}-{{exchangeCode}}-#### x#####',
        '({{areaCode}}) {{exchangeCode}}-#### x#####',
        '1-{{areaCode}}-{{exchangeCode}}-#### x#####',
        '{{areaCode}}.{{exchangeCode}}.#### x#####',
    ];

    protected array $e164Formats = [
        '+1{{areaCode}}{{exchangeCode}}####',
    ];

    /** @see https://en.wikipedia.org/wiki/Toll-free_telephone_number#United_States */
    protected array $tollFreeAreaCodes = [
        800, 844, 855, 866, 877, 888,
    ];
    protected array $tollFreeFormats = [
        // Standard formats
        '{{tollFreeAreaCode}}-{{exchangeCode}}-####',
        '({{tollFreeAreaCode}}) {{exchangeCode}}-####',
        '1-{{tollFreeAreaCode}}-{{exchangeCode}}-####',
        '{{tollFreeAreaCode}}.{{exchangeCode}}.####',
    ];

    public function tollFreeAreaCode(): int
    {
        return $this->randomizer->randomElement($this->tollFreeAreaCodes);
    }

    public function tollFreePhoneNumber(): string
    {
        $format = $this->randomizer->randomElement($this->tollFreeFormats);

        return $this->replacer->numerify($this->generator->parse($format));
    }

    /** @example '555-123-546 x123' */
    public function phoneNumberWithExtension(): string
    {
        return $this->replacer->numerify($this->generator->parse($this->randomizer->randomElement($this->formatsWithExtension)));
    }

    /**
     * NPA-format area code
     *
     * @see https://en.wikipedia.org/wiki/North_American_Numbering_Plan#Numbering_system
     */
    public function areaCode(): string
    {
        $firstDigit = $this->randomizer->getInt(2, 9);

        return $firstDigit . Regexify::regexify($this->areaCodeRegexes[$firstDigit]);
    }

    /**
     * NXX-format central office exchange code
     *
     * @see https://en.wikipedia.org/wiki/North_American_Numbering_Plan#Numbering_system
     */
    public function exchangeCode(): string
    {
        $digits[] = $this->randomizer->getInt(2, 9);
        $digits[] = $this->randomizer->getInt(0, 9);

        $digits[] = $digits[1] === 1 ? $this->generator->randomDigitNot(1) : $this->randomizer->getInt(0, 9);

        return implode('', $digits);
    }
}
