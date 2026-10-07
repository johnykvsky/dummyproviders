<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ar_SA;

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

    /**
     * @example 'مؤسسة'
     *
     * @return string
     */
    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefix);
    }

    /**
     * @example 'الحلول المتقدمة'
     */
    public function catchPhrase(): string
    {
        $result = [];

        foreach ($this->catchPhraseWords as &$word) {
            $result[] = $this->randomizer->randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs(): string
    {
        $result = [];

        foreach ($this->bsWords as &$word) {
            $result[] = $this->randomizer->randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * example 7001010101
     */
    public function companyIdNumber()
    {
        $partialValue = $this->replacer->numerify(700 . str_repeat('#', 6));

        return $this->luhnCalculator->generateLuhnNumber($partialValue);
    }

}
