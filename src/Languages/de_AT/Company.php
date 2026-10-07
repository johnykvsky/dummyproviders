<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\de_AT;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected array $companySuffix = ['AG', 'EWIV', 'Ges.m.b.H.', 'GmbH', 'KEG', 'KG', 'OEG', 'OG', 'OHG', 'SE'];

    /**
     * Austrian Value Added Tax Identification Number (UID / USt-IdNr)
     *
     * @see https://de.wikipedia.org/wiki/Umsatzsteuer-Identifikationsnummer#Österreich
     */
    public function uid(): string
    {
        $d1 = $this->randomizer->getInt(1, 9);
        $digits = [$d1];
        for ($i = 1; $i < 7; ++$i) {
            $digits[] = $this->randomizer->getInt(0, 9);
        }

        $oddSum = $digits[0] + $digits[2] + $digits[4] + $digits[6];
        $evenSum = 0;
        foreach ([1, 3, 5] as $idx) {
            $prod = $digits[$idx] * 2;
            $evenSum += (int) ($prod / 10) + ($prod % 10);
        }

        $total = $oddSum + $evenSum;
        $check = (96 - $total) % 10;
        if ($check < 0) {
            $check += 10;
        }

        return 'ATU' . implode('', $digits) . $check;
    }

    public function vatId(): string
    {
        return $this->uid();
    }

    /**
     * Austrian Commercial Register Number (Firmenbuchnummer)
     *
     * @see https://de.wikipedia.org/wiki/Firmenbuch
     */
    public function firmenbuchnummer(): string
    {
        $number = sprintf('%06d', $this->randomizer->getInt(1000, 999999));
        $letter = $this->randomizer->randomElement(range('a', 'z'));

        return sprintf('FN %s %s', $number, $letter);
    }
}
