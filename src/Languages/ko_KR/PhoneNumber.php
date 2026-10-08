<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ko_KR;

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

    //reference : https://ko.wikipedia.org/wiki/%EB%8C%80%ED%95%9C%EB%AF%BC%EA%B5%AD%EC%9D%98_%EC%A0%84%ED%99%94%EB%B2%88%ED%98%B8_%EC%B2%B4%EA%B3%84

    protected array $formats = [
        //local area phone format
        '070-####-####',
        '02-####-####',
        '03#-####-####',
        '04#-####-####',
        '05#-####-####',
        '06#-####-####',

        //cell phone format
        '010-####-####',

        //others: Intelligent Network(기간통신사업자)
        '15##-####',
        '16##-####',
        '18##-####',
    ];

    public function localAreaPhoneNumber()
    {
        $format = $this->randomizer->randomElement(array_slice($this->formats, 0, 6));

        return $this->replacer->numerify($this->generator->parse($format));
    }

    public function cellPhoneNumber()
    {
        $format = $this->randomizer->randomElement(array_slice($this->formats, 6, 1));

        return $this->replacer->numerify($this->generator->parse($format));
    }
}
