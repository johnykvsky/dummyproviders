<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\sv_SE;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;
use DummyGenerator\Definitions\Calculator\LuhnCalculatorInterface;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

/**
 * @see https://www.pts.se/sv/bransch/telefoni/nummer-och-adressering/telefoninummerplanen/telefonnummers-struktur/
 */
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

    /**
     * @var array Swedish phone number formats
     */
    protected array $formats = [
        '08-### ### ##',
        '0%#-### ## ##',
        '0%########',
        '+46 (0)%## ### ###',
        '+46(0)%########',
        '+46 %## ### ###',
        '+46%########',

        '08-### ## ##',
        '0%#-## ## ##',
        '0%##-### ##',
        '0%#######',
        '+46 (0)8 ### ## ##',
        '+46 (0)%# ## ## ##',
        '+46 (0)%## ### ##',
        '+46 (0)%#######',
        '+46(0)%#######',
        '+46%#######',

        '08-## ## ##',
        '0%#-### ###',
        '0%#######',
        '+46 (0)%######',
        '+46(0)%######',
        '+46%######',
    ];

    /**
     * @var array<int, string> Swedish mobile number formats
     */
    protected array $mobileFormats = [
        '+467########',
        '+46(0)7########',
        '+46 (0)7## ## ## ##',
        '+46 (0)7## ### ###',
        '07## ## ## ##',
        '07## ### ###',
        '07##-## ## ##',
        '07##-### ###',
        '07# ### ## ##',
        '07#-### ## ##',
        '07#-#######',
    ];

    public function mobileNumber() : string
    {
        $format = $this->randomizer->randomElement($this->mobileFormats);

        return $this->replacer->numerify($this->generator->parse($format));
    }

}
