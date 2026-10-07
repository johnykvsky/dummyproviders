<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\pt_PT;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}}',
        '{{lastName}} e {{lastName}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        'Grupo {{lastName}} {{companySuffix}}',
    ];

    protected array $companySuffix = ['e Filhos', 'e Associados', 'Lda.', 'S.A.'];

}
