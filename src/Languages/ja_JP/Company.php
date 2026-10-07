<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ja_JP;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{companyPrefix}} {{lastName}}',
    ];

    protected array $companyPrefix = ['株式会社', '有限会社'];

    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefix);
    }

    /**
     * Japanese Corporate Number (法人番号)
     * 13 digits with check digit at the front.
     *
     * @example '1180301018771'
     */
    public function corporateNumber(): string
    {
        $base = (string) $this->randomizer->getInt(1, 9);
        for ($i = 0; $i < 11; $i++) {
            $base .= (string) $this->randomizer->getInt(0, 9);
        }

        $sum = 0;
        for ($i = 0; $i < 12; $i++) {
            $n = 12 - $i;
            $weight = ($n % 2 === 0) ? 2 : 1;
            $sum += ((int) $base[$i]) * $weight;
        }

        $check = (9 - ($sum % 9)) % 9;

        return $check . $base;
    }

    /**
     * @example '1180301018771'
     */
    public function houjinBangou(): string
    {
        return $this->corporateNumber();
    }

}
