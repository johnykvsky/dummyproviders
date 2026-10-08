<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\pl_PL;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    /** @var array<string> */
    protected array $formats = [
        '{{lastName}}',
        '{{lastName}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{lastName}}-{{lastName}}',
    ];

    /** @var array<string> */
    protected array $companySuffix = ['S.A.', 'i syn', 'sp. z o.o.', 'sp. j.', 'sp. p.', 'sp. k.', 'S.K.A', 's. c.', 'P.P.O.F'];

    /** @var array<string> */
    protected array $companyPrefix = ['Grupa', 'Fundacja', 'Stowarzyszenie', 'Spółdzielnia'];

    /** @var string[] */
    protected array $industries = [
        'Technologia', 'Ochrona zdrowia', 'Usługi finansowe', 'Produkcja',
        'Handel detaliczny', 'Telekomunikacja', 'Edukacja', 'Energetyka',
        'Transport i logistyka', 'Media i rozrywka', 'Nieruchomości', 'Rolnictwo',
        'Hotelarstwo i gastronomia', 'Budownictwo', 'Konsulting', 'Motoryzacja',
    ];

    /** @example 'Grupa' */
    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefix);
    }

    /**
     * Register of the National Economy
     *
     * @return string 9 digit number
     *
     * @see http://pl.wikipedia.org/wiki/REGON
     */
    public function regon(): string
    {
        $weights = [8, 9, 2, 3, 4, 5, 6, 7];
        $regionNumber = $this->generator->numberBetween(0, 49) * 2 + 1;
        $result = [(int) ($regionNumber / 10), $regionNumber % 10];

        for ($i = 2, $size = count($weights); $i < $size; ++$i) {
            $result[$i] = $this->generator->randomDigit();
        }

        $checksum = 0;

        for ($i = 0, $size = count($result); $i < $size; ++$i) {
            $checksum += $weights[$i] * $result[$i];
        }

        $checksum %= 11;

        if ($checksum === 10) {
            $checksum = 0;
        }

        $result[] = $checksum;

        return implode('', $result);
    }

    /**
     * Register of the National Economy, local entity number
     *
     * @return string 14 digit number
     *
     * @see http://pl.wikipedia.org/wiki/REGON
     */
    public function regonLocal(): string
    {
        $weights = [2, 4, 8, 5, 0, 9, 7, 3, 6, 1, 2, 4, 8];
        $result = str_split($this->regon());

        for ($i = count($result), $size = count($weights); $i < $size; ++$i) {
            $result[$i] = $this->generator->randomDigit();
        }

        $checksum = 0;

        for ($i = 0, $size = count($result); $i < $size; ++$i) {
            $checksum += $weights[$i] * (int) $result[$i];
        }

        $checksum %= 11;

        if ($checksum === 10) {
            $checksum = 0;
        }

        $result[] = $checksum;

        return implode('', $result);
    }

    /**
     * Taxpayer Identification Number (NIP in Polish)
     *
     * @return string 10 digit number
     *
     * @see http://pl.wikipedia.org/wiki/NIP
     */
    public function nip(): string
    {
        $weights = [6, 5, 7, 2, 3, 4, 5, 6, 7];

        do {
            $result = [
                $this->generator->randomDigitNotZero(), $this->generator->randomDigitNotZero(), $this->generator->randomDigitNotZero(),
                $this->generator->randomDigit(), $this->generator->randomDigit(), $this->generator->randomDigit(),
                $this->generator->randomDigit(), $this->generator->randomDigit(), $this->generator->randomDigit(),
            ];
            $checksum = 0;

            for ($i = 0, $size = count($result); $i < $size; ++$i) {
                $checksum += $weights[$i] * $result[$i];
            }

            $checksum %= 11;
        } while ($checksum === 10);

        $result[] = $checksum;

        return implode('', $result);
    }

    /**
     * National Court Register number (Krajowy Rejestr Sądowy / KRS)
     *
     * 10 digits number
     *
     * @see https://pl.wikipedia.org/wiki/Krajowy_Rejestr_S%C4%85dowy
     */
    public function krs(): string
    {
        return sprintf('%010d', $this->randomizer->getInt(1, 9999999));
    }
}
