<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_CA;

use DummyGenerator\Core\Company as BaseCompany;
use DummyGenerator\Definitions\Calculator\LuhnCalculatorInterface;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

class Company extends BaseCompany
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
     * Canadian Business Number (BN)
     *
     * 9 digits registered with CRA (passes Luhn check)
     *
     * @see https://en.wikipedia.org/wiki/Business_Number
     */
    public function bn(bool $formatted = false): string
    {
        $digits = $this->replacer->numerify('%#######');
        $check = $this->luhnCalculator->computeCheckDigit($digits);
        $bn = $digits . $check;

        if ($formatted) {
            return sprintf('%s %s', substr($bn, 0, 5), substr($bn, 5, 4));
        }

        return $bn;
    }
}
