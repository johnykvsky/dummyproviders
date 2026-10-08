<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\bn_BD;

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

    public function phoneNumber(): string
    {
        $number = '+880';
        $number .= $this->generator->randomNumber(7);

        return $this->getBanglaNumber($number);
    }

    private function getBanglaNumber(int|string $number): string
    {
        $english = range(0, 9);
        $bangla = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];

        return str_replace(array_map('strval', $english), $bangla, (string) $number);
    }
}
