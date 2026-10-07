<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\sl_SI;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{firstName}} {{lastName}} s.p.',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}, {{lastName}} in {{lastName}} {{companySuffix}}',
    ];

    protected array $companySuffix = ['d.o.o.', 'd.d.', 'k.d.', 'k.d.d.', 'd.n.o.', 'so.p.'];

}
