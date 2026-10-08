<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ar_JO;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
    ];

    protected array $bsWords = [
        [],
    ];

    protected array $catchPhraseWords = [
        ['الخدمات', 'الحلول', 'الانظمة'],
        [
            'الذهبية', 'الذكية', 'المتطورة', 'المتقدمة', 'الدولية', 'المتخصصه', 'السريعة',
            'المثلى', 'الابداعية', 'المتكاملة', 'المتغيرة', 'المثالية',
        ],
    ];

    protected array $companyPrefix = ['شركة', 'مؤسسة', 'مجموعة', 'مكتب', 'أكاديمية', 'معرض'];

    protected array $companySuffix = ['وأولاده', 'للمساهمة المحدودة', ' ذ.م.م', 'مساهمة عامة', 'وشركائه'];

    /** @example 'مؤسسة' */
    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefix);
    }

    /** @example 'Robust full-range hub' */
    public function catchPhrase(): string
    {
        $result = [];

        foreach ($this->catchPhraseWords as &$word) {
            $result[] = $this->randomizer->randomElement($word);
        }

        return implode(' ', $result);
    }

    /** @example 'integrate extensible convergence' */
    public function bs(): string
    {
        $result = [];

        foreach ($this->bsWords as &$word) {
            $result[] = $this->randomizer->randomElement($word);
        }

        return implode(' ', $result);
    }
}
