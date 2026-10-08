<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\lt_LT;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $userNameFormats = [
        '{{lastNameMale}}.{{firstNameMale}}',
        '{{lastNameFemale}}.{{firstNameFemale}}',
        '{{firstNameMale}}##',
        '{{firstNameFemale}}##',
        '?{{lastNameFemale}}',
        '?{{lastNameMale}}',
    ];

    protected array $freeEmailDomain = ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com'];
    protected array $tld = ['com', 'com', 'net', 'org', 'lt', 'lt', 'lt', 'lt', 'lt'];
}
