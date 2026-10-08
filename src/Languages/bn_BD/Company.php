<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\bn_BD;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{companyName}} {{companyType}}',
    ];

    protected array $names = [
        'রহিম', 'করিম', 'বাবলু',
    ];

    protected array $types = [
        'সিমেন্ট', 'সার', 'ঢেউটিন',
    ];

    public function companyType()
    {
        return $this->randomizer->randomElement($this->types);
    }

    public function companyName()
    {
        return $this->randomizer->randomElement($this->names);
    }
}
