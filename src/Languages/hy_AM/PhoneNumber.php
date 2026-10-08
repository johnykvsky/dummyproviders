<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\hy_AM;

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

    protected array $codes = [91, 96, 99, 43, 77, 93, 94, 98, 97, 77, 55, 95, 41, 49];

    protected array $numberFormats = [
        '######',
        '##-##-##',
        '###-###',
    ];

    protected array $formats = [
        '0{{code}} {{numberFormat}}',
        '(0{{code}}) {{numberFormat}}',
        '+374{{code}} {{numberFormat}}',
        '+374 {{code}} {{numberFormat}}',
    ];

    public function phoneNumber(): string
    {
        return $this->replacer->numerify($this->generator->parse($this->randomizer->randomElement($this->formats)));
    }

    public function code()
    {
        return $this->randomizer->randomElement($this->codes);
    }

    public function numberFormat()
    {
        return $this->randomizer->randomElement($this->numberFormats);
    }
}
