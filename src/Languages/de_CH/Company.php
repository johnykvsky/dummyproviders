<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\de_CH;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    ];

    protected array $companySuffix = ['AG', 'GmbH'];

    /**
     * Swiss Business Identification Number (UID / IDE)
     *
     * @see https://www.uid.admin.ch/
     */
    public function uid(bool $formatted = true): string
    {
        $weights = [5, 4, 3, 2, 7, 6, 5, 4];
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
        } while ($remainder === 10);

        $checkDigit = $remainder === 0 ? 0 : 11 - $remainder;
        $allDigits = implode('', $digits) . $checkDigit;

        if ($formatted) {
            return sprintf(
                'CHE-%s.%s.%s',
                substr($allDigits, 0, 3),
                substr($allDigits, 3, 3),
                substr($allDigits, 6, 3),
            );
        }

        return 'CHE' . $allDigits;
    }

    public function ide(bool $formatted = true): string
    {
        return $this->uid($formatted);
    }
}
