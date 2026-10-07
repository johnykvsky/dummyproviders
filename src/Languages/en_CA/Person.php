<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_CA;

use DummyGenerator\Core\Person as BasePerson;
use DummyGenerator\Definitions\Calculator\LuhnCalculatorInterface;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

class Person extends BasePerson
{
    public function __construct(
        RandomizerInterface $randomizer,
        GeneratorInterface $generator,
        protected ReplacerInterface $replacer,
        protected LuhnCalculatorInterface $luhnCalculator,
    ) {
        parent::__construct($randomizer, $generator);
    }

    /**
     * Canadian Social Insurance Number (SIN)
     *
     * 9 digits with Luhn checksum
     *
     * @see https://en.wikipedia.org/wiki/Social_Insurance_Number
     */
    public function sin(bool $formatted = false): string
    {
        $first = $this->randomizer->randomElement([1, 2, 3, 4, 5, 6, 7, 9]);
        $digits = (string) $first . $this->replacer->numerify('#######');
        $check = $this->luhnCalculator->computeCheckDigit($digits);
        $sin = $digits . $check;

        if ($formatted) {
            return sprintf('%s %s %s', substr($sin, 0, 3), substr($sin, 3, 3), substr($sin, 6, 3));
        }

        return $sin;
    }
}
