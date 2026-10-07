<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_ZA;

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
        '+27({{areaCode}})#######',
        '+27{{areaCode}}#######',
        '0{{areaCode}}#######',
        '0{{areaCode}} ### ####',
        '0{{areaCode}}-###-####',
    ];

    protected array $cellphoneFormats = [
        '+27{{cellphoneCode}}#######',
        '0{{cellphoneCode}}#######',
        '0{{cellphoneCode}} ### ####',
        '0{{cellphoneCode}}-###-####',
    ];

    protected array $specialFormats = [
        '{{specialCode}}#######',
        '{{specialCode}} ### ####',
        '{{specialCode}}-###-####',
        '({{specialCode}})###-####',
    ];

    protected array $tollFreeAreaCodes = [
        '0800', '0860', '0861', '0862',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_South_Africa
     */
    public function areaCode(): string
    {
        $digits[] = $this->randomizer->getInt(1, 5);

        switch ($digits[0]) {
            case 1:
                $digits[] = $this->randomizer->getInt(1, 8);

                break;

            case 2:
                $number = $this->randomizer->getInt(1, 8);
                $digits[] = in_array($number, [5, 6], false) ? $number + 2 : $number;

                break;

            case 3:
                $number = $this->randomizer->getInt(1, 8);
                $digits[] = in_array($number, [7, 8], false) ? $number - 2 : $number;

                break;

            case 4:
                $digits[] = $this->randomizer->getInt(1, 9);

                break;

            case 5:
                $number = $this->randomizer->getInt(1, 8);
                $digits[] = in_array($number, [2, 5], false) ? $number + 2 : $number;

                break;
        }

        return implode('', $digits);
    }

    public function cellphoneCode()
    {
        $digits[] = $this->randomizer->getInt(6, 8);

        switch ($digits[0]) {
            case 6:
                $digits[] = $this->randomizer->getInt(0, 2);

                break;

            case 7:
                $number = $this->randomizer->getInt(1, 9);
                $digits[] = in_array($number, [5, 7], false) ? $number + 1 : $number;

                break;

            case 8:
                $digits[] = $this->randomizer->getInt(1, 9);

                break;
        }

        return implode('', $digits);
    }

    public function specialCode()
    {
        return $this->randomizer->randomElement($this->tollFreeAreaCodes);
    }

    public function mobileNumber(): string
    {
        $format = $this->randomizer->randomElement($this->cellphoneFormats);

        return $this->replacer->numerify($this->generator->parse($format));
    }

    public function tollFreeNumber()
    {
        $format = $this->randomizer->randomElement($this->specialFormats);

        return $this->replacer->numerify($this->generator->parse($format));
    }

}
