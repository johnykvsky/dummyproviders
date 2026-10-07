<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_AU;

use DummyGenerator\Core\Person as BasePerson;

class Person extends BasePerson
{
    /**
     * Australian Tax File Number (TFN)
     *
     * 8 or 9 digits number with weighted checksum mod 11
     *
     * @see https://en.wikipedia.org/wiki/Tax_file_number
     */
    public function tfn(): string
    {
        $weights = [10, 7, 8, 4, 6, 3, 5, 2, 1];
        do {
            $digits = [$this->randomizer->getInt(1, 9)];
            for ($i = 1; $i < 8; ++$i) {
                $digits[] = $this->randomizer->getInt(0, 9);
            }
            $sum = 0;
            for ($i = 0; $i < 8; ++$i) {
                $sum += $digits[$i] * $weights[$i];
            }
            $remainder = $sum % 11;
            $check = (11 - $remainder) % 11;
        } while ($check === 10);

        return implode('', $digits) . $check;
    }

    /**
     * Australian Medicare Card Number
     *
     * 10 digits: 8 digit base + 1 check digit + 1 issue number (1-9)
     *
     * @see https://en.wikipedia.org/wiki/Medicare_(Australia)
     */
    public function medicare(): string
    {
        $weights = [1, 3, 7, 9, 1, 3, 7, 9];
        $digits = [$this->randomizer->getInt(2, 6)];
        for ($i = 1; $i < 8; ++$i) {
            $digits[] = $this->randomizer->getInt(0, 9);
        }

        $sum = 0;
        for ($i = 0; $i < 8; ++$i) {
            $sum += $digits[$i] * $weights[$i];
        }
        $check = $sum % 10;
        $issueNumber = $this->randomizer->getInt(1, 9);

        return implode('', $digits) . $check . $issueNumber;
    }
}
