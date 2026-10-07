<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\hu_HU;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected array $companySuffix = ['Kft.', 'és Tsa', 'Kht', 'Zrt.', 'Nyrt.', 'Bt.'];

}
