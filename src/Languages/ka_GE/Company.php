<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ka_GE;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $companyPrefixes = [
        'შპს', 'შპს', 'შპს', 'სს', 'სს', 'სს', 'კს', 'სს კორპორაცია', 'იმ', 'სპს', 'კოოპერატივი',
    ];

    protected array $companyNameSuffixes = [
        'საბჭო', 'ექსპედიცია', 'პრომი', 'კომპლექსი', 'ავტო', 'ლიზინგი', 'თრასთი', 'ეიდი', 'პლუსი',
        'ლაბი', 'კავშირი', ' და კომპანია',
    ];

    protected array $companyElements = [
        'ცემ', 'გეო', 'ქარ', 'ქიმ', 'ლიფტ', 'ტელე', 'რადიო', 'ტრანს', 'ალმას', 'მეტრო',
        'მოტორ', 'ტექ', 'სანტექ', 'ელექტრო', 'რეაქტო', 'ტექსტილ', 'კაბელ', 'მავალ', 'ტელ',
        'ტექნო',
    ];

    protected array $companyNameFormats = [
        '{{companyPrefix}} {{companyNameElement}}{{companyNameSuffix}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
    ];

    /**
     * @example 'იმ ელექტროალმასგეოსაბჭო'
     */
    public function company(): string
    {
        $format = $this->randomizer->randomElement($this->companyNameFormats);

        return $this->generator->parse($format);
    }

    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefixes);
    }

    public function companyNameElement()
    {
        return $this->randomizer->randomElement($this->companyElements);
    }

    public function companyNameSuffix()
    {
        return $this->randomizer->randomElement($this->companyNameSuffixes);
    }

}
