<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_AU;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    /**
     * Australian Company Number (ACN)
     *
     * 9 digits with checksum mod 10
     *
     * @see https://en.wikipedia.org/wiki/Australian_Company_Number
     */
    public function acn(bool $formatted = false): string
    {
        $weights = [8, 7, 6, 5, 4, 3, 2, 1];
        $digits = [];
        for ($i = 0; $i < 8; ++$i) {
            $digits[] = $this->randomizer->getInt(0, 9);
        }
        $sum = 0;
        for ($i = 0; $i < 8; ++$i) {
            $sum += $digits[$i] * $weights[$i];
        }
        $rem = $sum % 10;
        $check = (10 - $rem) % 10;

        $acn = implode('', $digits) . $check;
        if ($formatted) {
            return sprintf('%s %s %s', substr($acn, 0, 3), substr($acn, 3, 3), substr($acn, 6, 3));
        }

        return $acn;
    }

    /**
     * Australian Business Number (ABN)
     *
     * 11 digits number: 2 check digits followed by 9-digit ACN, mod 89 == 0
     *
     * @see https://en.wikipedia.org/wiki/Australian_Business_Number
     */
    public function abn(bool $formatted = false): string
    {
        $acn = $this->acn(false);
        $weights = [10, 1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
        $acnDigits = array_map('intval', str_split($acn));
        $acnSum = 0;
        for ($i = 0; $i < 9; ++$i) {
            $acnSum += $acnDigits[$i] * $weights[$i + 2];
        }

        $target = (89 - ($acnSum % 89)) % 89;
        $num = $target + 10;
        if ($num >= 100) {
            $num -= 89;
        }
        $abn = sprintf('%02d%s', $num, $acn);

        if ($formatted) {
            return sprintf('%s %s %s %s', substr($abn, 0, 2), substr($abn, 2, 3), substr($abn, 5, 3), substr($abn, 8, 3));
        }

        return $abn;
    }
}
