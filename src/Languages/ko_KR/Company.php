<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ko_KR;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{companyPrefix}}{{firstName}}',
        '{{companyPrefix}}{{firstName}}{{companySuffix}}',
        '{{firstName}}{{companySuffix}}',
        '{{firstName}}{{companySuffix}}',
        '{{firstName}}{{companySuffix}}',
        '{{firstName}}{{companySuffix}}',
    ];

    protected array $companyPrefix = ['(주)', '(주)', '(주)', '(유)'];

    protected array $companySuffix = [
        '전자', '건설', '식품', '인터넷', '그룹', '은행', '보험', '제약', '금융', '네트웍스', '기획', '미디어', '연구소', '모바일', '스튜디오', '캐피탈',
    ];

    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefix);
    }

    public function companySuffix(): string
    {
        return $this->randomizer->randomElement($this->companySuffix);
    }

    /**
     * South Korean Business Registration Number (사업자등록번호 - BRN)
     * 10 digits: XXX-XX-XXXXX.
     *
     * @example '124-81-00998'
     */
    public function brn(bool $formatted = true): string
    {
        $digits = '';
        for ($i = 0; $i < 9; $i++) {
            $digits .= (string) $this->randomizer->getInt(0, 9);
        }

        $weights = [1, 3, 7, 1, 3, 7, 1, 3, 5];
        $sum = 0;
        for ($i = 0; $i < 9; $i++) {
            $sum += ((int) $digits[$i]) * $weights[$i];
        }
        $sum += intdiv(((int) $digits[8]) * 5, 10);

        $check = (10 - ($sum % 10)) % 10;
        $full = $digits . $check;

        return $formatted
            ? (substr($full, 0, 3) . '-' . substr($full, 3, 2) . '-' . substr($full, 5, 5))
            : $full;
    }

    /**
     * @example '124-81-00998'
     */
    public function businessRegistrationNumber(bool $formatted = true): string
    {
        return $this->brn($formatted);
    }

}
