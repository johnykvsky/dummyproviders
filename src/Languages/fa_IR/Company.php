<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fa_IR;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{lastName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{lastName}}',
    ];

    protected array $companyPrefix = [
        'شرکت', 'موسسه', 'سازمان', 'بنیاد',
    ];

    protected array $companyField = [
        'فناوری اطلاعات', 'راه و ساختمان', 'توسعه معادن', 'استخراج و اکتشاف',
        'سرمایه گذاری', 'نساجی', 'کاریابی', 'تجهیزات اداری', 'تولیدی', 'فولاد',
    ];

    protected array $contract = [
        'رسمی', 'پیمانی', 'تمام وقت', 'پاره وقت', 'پروژه ای', 'ساعتی',
    ];

    /** @example 'شرکت' */
    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefix);
    }

    /**
     * @return string
     *
     * @example 'سرمایه گذاری'
     */
    public function companyField()
    {
        return $this->randomizer->randomElement($this->companyField);
    }

    /**
     * @return string
     *
     * @example 'تمام وقت'
     */
    public function contract()
    {
        return $this->randomizer->randomElement($this->contract);
    }
}
