<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\de_DE;

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
        2 => '(0[0-389]|0[4-6][1-68]|1[124]|1[0-9][0-9]|2[18]|2[0-9][1-9]|3[14]|3[0-35-9][0-9]|4[1]|4[02-8][0-9]|5[1]|5[02-9][0-9]|6[1]|6[02-9][0-9]|7[1]|7[2-7][0-9]|8[1]|8[02-7][0-9]|9[1]|9[02-9][0-9])',
        3 => '(0|3[15]|3[02-46-9][1-9]|3[02-46-9][02-9][0-9]|4[015]|4[2-4679][1-8]|4[2-4679][02-9][0-9]|5[15]|5[02-46-9][1-9]|5[02-46-9][02-9][0-9]|6[15]|6[02-46-9][1-9]|6[02-46-9][02-9][0-9]|7[15]|7[2-467][1-7]|7[2-467][02-689][0-9]|8[15]|8[2-46-8][013-9]|8[2-46-8][02-9][0-9]|9[15]|9[02-46-9][1-9]|9[02-46-9][02-9][0-9])',
        4 => '(0|1[02-9][0-9]|2[1]|2[02-9][0-9]|3[1]|3[02-9][0-9]|4[1]|4[0-9][0-9]|5[1]|5[02-6][0-9]|6[1]|6[02-8][0-9]|7[1]|7[02-79][0-9]|8[1]|8[02-9][0-9]|9[1]|9[02-7][0-9])',
        5 => '(0[2-8][0-9]|1[1]|1[02-9][0-9]|2[1]|2[02-9][1-9]|3[1]|3[02-8][0-9]|4[1]|4[02-9][1-9]|5[1]|5[02-9][0-9]|6[1]|6[02-9][0-9]|7[1]|7[02-7][1-9]|8[1]|8[02-8][0-9]|9[1]|9[0-7][1-9])',
        6 => '(0[02-9][0-9]|1[1]|1[02-9][0-9]|2[1]|2[02-9][0-9]|3[1]|3[02-9][0-9]|4[1]|4[0-8][0-9]|5[1]|5[02-9][0-9]|6[1]|6[2-9][0-9]|7[1]|7[02-8][1-9]|8[1]|8[02-9][1-9]|9)',
        7 => '(0[2-8][1-6]|1[1]|1[2-9][0-9]|2[1]|2[0-7][0-9]|3[1]|3[02-9][0-9]|4[1]|4[0-8][0-9]|5[1]|5[02-8][0-9]|6[1]|6[02-8][0-9]|7[1]|7[02-7][0-9]|8[1]|8[02-5][1-9]|9[1]|9[03-7][0-9])',
        8 => '(0[2-9][0-9]|1[1]|1[02-79][0-9]|2[1]|2[02-9][0-9]|3[1]|3[02-9][0-9]|4[1]|4[02-6][0-9]|5[1]|5[02-9][0-9]|6[1]|6[2-8][0-9]|7[1]|7[02-8][1-9]|8[1]|8[02-6][0-9]|9)',
        9 => '(0[6]|0[07-9][0-9]|1[1]|1[02-9][0-9]|2[1]|2[02-9][0-9]|3[1]|3[02-9][0-9]|4[1]|4[02-9][0-9]|5[1]|5[02-7][0-9]|6[1]|6[02-8][1-9]|7[1]|7[02-467][0-9]|8[1]|8[02-7][0-9]|9[1]|9[02-7][0-9])',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers#Germany
     * @see https://www.itu.int/oth/T0202000051/en
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Germany
     */
    protected array $formats = [
        // International format
        '+49 {{areaCode}} #######',
        '+49 {{areaCode}} ### ####',
        '+49{{areaCode}}#######',
        '+49{{areaCode}}### ####',

        // Standard formats
        '0{{areaCode}} ### ####',
        '0{{areaCode}} #######',
        '(0{{areaCode}}) ### ####',
        '(0{{areaCode}}) #######',
    ];

    protected array $e164Formats = [
        '+49{{areaCode}}#######',
    ];

    /** @see https://en.wikipedia.org/wiki/Toll-free_telephone_number */
    protected array $tollFreeAreaCodes = [
        800,
    ];

    protected array $tollFreeFormats = [
        // Standard formats
        '0{{tollFreeAreaCode}} ### ####',
        '(0{{tollFreeAreaCode}}) ### ####',
        '+49{{tollFreeAreaCode}} ### ####',
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

    protected array $mobileCodes = [
        1511, 1512, 1514, 1515, 1516, 1517,
        1520, 1521, 1522, 1523, 1525, 1526, 1529,
        1570, 1573, 1575, 1577, 1578, 1579,
        1590,
    ];

    protected array $mobileFormats = [
        '+49{{mobileCode}}#######',
        '+49 {{mobileCode}} ### ####',
        '0{{mobileCode}}#######',
        '0{{mobileCode}} ### ####',
        '0 {{mobileCode}} ### ####',
    ];

    /** @see https://en.wikipedia.org/wiki/List_of_dialling_codes_in_Germany */
    public function areaCode(): string
    {
        $firstDigit = $this->randomizer->getInt(2, 9);

        return $firstDigit . Regexify::regexify($this->areaCodeRegexes[$firstDigit]);
    }

    /**
     * Generate a code for a mobile number.
     *
     * @return string
     *
     * @internal Used to generate mobile numbers.
     */
    public function mobileCode()
    {
        return $this->randomizer->randomElement($this->mobileCodes);
    }

    /**
     * Generate a mobile number.
     *
     * @example A mobile number: '015111234567'
     * @example A mobile number with spaces: '01511 123 4567'
     * @example A mobile number with international code prefix: '+4915111234567'
     * @example A mobile number with international code prefix and spaces: '+49 1511 123 4567'
     */
    public function mobileNumber(): string
    {
        return ltrim($this->replacer->numerify($this->generator->parse(
            $this->randomizer->randomElement($this->mobileFormats),
        )));
    }
}
