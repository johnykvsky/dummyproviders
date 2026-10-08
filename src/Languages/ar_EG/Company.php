<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ar_EG;

use DummyGenerator\Core\Company as BaseCompany;
use DummyGenerator\Definitions\Calculator\LuhnCalculatorInterface;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

class Company extends BaseCompany
{
    public function __construct(
        RandomizerInterface $randomizer,
        GeneratorInterface $generator,
        protected ReplacerInterface $replacer,
        protected LuhnCalculatorInterface $luhnCalculator,
    ) {
        parent::__construct($randomizer, $generator);
    }

    protected array $formats = [
        '{{companyPrefix}} {{cityName}}',
        '{{companyPrefix}} {{lastName}}',
        '{{cityName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{cityName}} {{companySuffix}}',
    ];

    protected array $catchPhraseWords = [
        ['الخدمات', 'الحلول', 'الانظمة'],
        [
            'الذهبية', 'الذكية', 'المتطورة', 'المتقدمة', 'الدولية', 'المتخصصه', 'السريعة',
            'المثلى', 'الابداعية', 'المتكاملة', 'المتغيرة', 'المثالية',
        ],
    ];

    protected array $companyPrefix = ['شركة', 'مؤسسة', 'مجموعة', 'مكتب', 'أكاديمية', 'معرض'];

    protected array $companySuffix = [
        ' ش.م.م',
        ' للتجاره العامه',
        'للأجهزة الطبيه',
        'للتوريدات',
        'للمقاولات',
        'للتطوير العقاري',
        'للدعايه و الاعلان',
        'للحلول المتقدمه',
        'للخدمات الدولية',
        'الدولية',
        'للانظمة المتكاملة',
    ];

    /** @example 'مؤسسة' */
    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefix);
    }

    /** @example 'الحلول المتقدمة' */
    public function catchPhrase(): string
    {
        $result = [];

        foreach ($this->catchPhraseWords as &$word) {
            $result[] = $this->randomizer->randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * example 010101010
     */
    public function companyTaxIdNumber()
    {
        $partialValue = $this->replacer->numerify(str_repeat('#', 9));

        return $this->luhnCalculator->generateLuhnNumber($partialValue);
    }

    /**
     * example 010101
     */
    public function companyTradeRegisterNumber()
    {
        $partialValue = $this->replacer->numerify(str_repeat('#', 6));

        return $this->luhnCalculator->generateLuhnNumber($partialValue);
    }
}
