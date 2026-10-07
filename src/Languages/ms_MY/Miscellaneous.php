<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ms_MY;

use DummyGenerator\Definitions\Extension\ExtensionInterface;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

class Miscellaneous implements ExtensionInterface
{
    public function __construct(
        private readonly RandomizerInterface $randomizer,
        private readonly ReplacerInterface $replacer,
        private readonly GeneratorInterface $generator,
    ) {
    }

    /**
     * @see https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia
     */
    protected array $jpjNumberPlateFormats = [
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        'W{{validAlphabet}}{{validAlphabet}} {{numberSequence}} {{validAlphabet}}',
        'KV {{numberSequence}} {{validAlphabet}}',
        '{{sarawakPrefix}} {{numberSequence}} {{validAlphabet}}',
        '{{sabahPrefix}} {{numberSequence}} {{validAlphabet}}',
        '{{specialPrefix}} {{numberSequence}}',
    ];

    /**
     * Some alphabet has higher frequency that coincides with the current number
     * of registrations. E.g. W = Wilayah Persekutuan
     *
     * @see https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format
     */
    protected array $peninsularPrefix = [
        'A', 'A', 'B', 'C', 'D', 'F', 'J', 'J', 'K', 'M', 'N', 'P', 'P', 'R', 'T', 'V',
        'W', 'W', 'W', 'W', 'W', 'W',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format_2
     */
    protected array $sarawakPrefix = [
        'QA', 'QK', 'QB', 'QC', 'QL', 'QM', 'QP', 'QR', 'QS', 'QT',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format_3
     */
    protected array $sabahPrefix = [
        'SA', 'SAA', 'SAB', 'SAC', 'SB', 'SD', 'SG',
        'SK', 'SL', 'SS', 'SSA', 'ST', 'STA', 'SU',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Commemorative_plates
     */
    protected array $specialPrefix = [
        '1M4U',
        'A1M',
        'BAMbee',
        'Chancellor',
        'G', 'G1M', 'GP', 'GT',
        'Jaguh',
        'K1M', 'KRISS',
        'LOTUS',
        'NAAM', 'NAZA', 'NBOS',
        'PATRIOT', 'Perdana', 'PERFECT', 'Perodua', 'Persona', 'Proton', 'Putra', 'PUTRAJAYA',
        'RIMAU',
        'SAM', 'SAS', 'Satria', 'SMS', 'SUKOM',
        'T1M', 'Tiara', 'TTB',
        'U', 'US',
        'VIP',
        'WAJA',
        'XIIINAM', 'XOIC', 'XXVIASEAN', 'XXXIDB',
        'Y',
    ];

    /**
     * Chances of having an empty alphabet will be 1/24
     *
     * @see https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format
     */
    protected array $validAlphabets = [
        'A', 'B', 'C', 'D', 'E', 'F',
        'G', 'H', 'J', 'K', 'L', 'M',
        'N', 'P', 'Q', 'R', 'S', 'T',
        'U', 'V', 'W', 'X', 'Y', '',
    ];

    /**
     * Return a valid Malaysia JPJ(Road Transport Department) vehicle licence plate number
     *
     * @example 'WKN 2368'
     *
     * @return string
     */
    public function jpjNumberPlate(): string
    {
        $formats = $this->replacer->toUpper($this->replacer->lexify($this->replacer->bothify($this->randomizer->randomElement($this->jpjNumberPlateFormats))));

        return $this->generator->parse($formats);
    }

    /**
     * Return Peninsular prefix alphabet
     *
     * @example 'W'
     *
     * @return string
     */
    public function peninsularPrefix(): string
    {
        return $this->randomizer->randomElement($this->peninsularPrefix);
    }

    /**
     * Return Sarawak state prefix alphabet
     *
     * @example 'QA'
     *
     * @return string
     */
    public function sarawakPrefix(): string
    {
        return $this->randomizer->randomElement($this->sarawakPrefix);
    }

    /**
     * Return Sabah state prefix alphabet
     *
     * @example 'SA'
     *
     * @return string
     */
    public function sabahPrefix(): string
    {
        return $this->randomizer->randomElement($this->sabahPrefix);
    }

    /**
     * Return specialty licence plate prefix
     *
     * @example 'G1M'
     *
     * @return string
     */
    public function specialPrefix(): string
    {
        return $this->randomizer->randomElement($this->specialPrefix);
    }

    /**
     * Return a valid license plate alphabet
     *
     * @example 'A'
     *
     * @return string
     */
    public function validAlphabet(): string
    {
        return $this->randomizer->randomElement($this->validAlphabets);
    }

    /**
     * Return a valid number sequence between 1 and 9999
     *
     * @example '1234'
     *
     * @return int
     */
    public function numberSequence(): int
    {
        return $this->randomizer->getInt(1, 9999);
    }

}
