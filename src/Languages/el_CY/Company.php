<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\el_CY;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $companySuffix = [
        'ΛΤΔ',
        'Δημόσια εταιρεία',
        '& Υιοι',
        '& ΣΙΑ',
    ];

    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
    ];
}
