<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\lt_LT;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{companySuffix}} {{lastNameMale}}',
        '{{companySuffix}} {{lastNameMale}} ir {{lastNameMale}}',
        '{{companySuffix}} "{{lastNameMale}} ir {{lastNameMale}}"',
        '{{companySuffix}} "{{lastNameMale}}"',
    ];

    protected array $companySuffix = ['UAB', 'AB', 'IĮ', 'MB', 'VŠĮ'];

}
