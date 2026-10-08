<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\he_IL;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} את {{lastName}} {{companySuffix}}',
        '{{lastName}} ו{{lastName}}',
    ];

    protected array $companySuffix = ['בע"מ', 'ובניו', 'סוכנויות', 'משווקים'];
}
