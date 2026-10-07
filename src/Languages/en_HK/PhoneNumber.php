<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_HK;

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

    protected array $formats = ['2#######', '3#######', '5#######', '6#######', '9#######'];
    protected array $mobileFormats = ['5#######', '6#######', '9#######'];
    protected array $landlineFormats = ['2#######', '3#######'];
    protected array $faxFormats = ['7#######'];

    /**
     * Return an en_HK mobile phone number
     *
     * @return string
     */
    public function mobileNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->mobileFormats));
    }

    /**
     * Return an en_HK landline number
     *
     * @return string
     */
    public function landlineNumber()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->landlineFormats));
    }

    /**
     * Return an en_HK fax number
     *
     * @return string
     */
    public function faxNumber()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->faxFormats));
    }

}
