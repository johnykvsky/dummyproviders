<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\hr_HR;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{firstName}}',
    ];

    protected array $companySuffix = [
        'd.o.o.', 'j.d.o.o.', 'Security',
    ];

    protected array $companyPrefix = [
        'Autoškola', 'Cvjećarnica', 'Informatički obrt', 'Kamenorezački obrt', 'Kladionice', 'Market', 'Mesnica', 'Prijevoznički obrt', 'Suvenirnica', 'Turistička agencija', 'Voćarna',
    ];

    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefix);
    }

}
