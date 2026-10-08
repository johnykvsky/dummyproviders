<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ckb_IQ;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    /** @var string[] */
    protected array $formats = [
        '{{companyPrefix}} {{companyField}} {{firstNameMale}}',
        '{{companyPrefix}} {{companyField}} {{firstNameMale}}',
        '{{companyPrefix}} {{companyField}} {{lastName}}',
        '{{companyField}} {{lastName}}',
        '{{lastName}} {{companySuffix}}',
    ];

    /** @var string[] */
    protected array $companyPrefix = [
        'کۆمپانیای', 'دامەزراوەی', 'کۆمەڵەی', 'بنکەی',
    ];

    /** @var string[] */
    protected array $companyField = [
        'بازرگانی', 'دارایی', 'کارگێڕی', 'تەکنەلۆجیای زانیاری',
        'بیناسازی', 'گەشتیاری', 'پیشەسازی', 'کشتوکاڵ',
    ];

    /** @var string[] */
    protected array $companySuffix = [
        'گروپ', 'هۆڵدینگ',
    ];

    /** @var string[] */
    protected array $contract = [
        'فوڵتایم', 'پارتتایم', 'گرێبەستی', 'کاتژمێری', 'پڕۆژەیی',
    ];

    /** @example 'کۆمپانیای' */
    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefix);
    }

    /** @example 'بازرگانی' */
    public function companyField(): string
    {
        return $this->randomizer->randomElement($this->companyField);
    }

    /** @example 'فوڵتایم' */
    public function contract(): string
    {
        return $this->randomizer->randomElement($this->contract);
    }
}
