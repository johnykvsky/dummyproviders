<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ar_EG;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $userNameFormats = [
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    ];
    protected array $safeEmailTld = [
        'com', 'com.eg', 'eg', 'me', 'net', 'org',
    ];

    protected array $tld = [
        'biz', 'com', 'come.eg', 'info', 'eg', 'net', 'org',
    ];

    protected array $lastNameAscii = [
        'ahmed',
        'mostafa',
        'mahmoud',
        'carmen',
        'rakeen',
        'hazem',
        'ezz',
        'hemeida',
        'ramah',
        'fahmy',
        'ehab',
        'karim',
        'abdulaziz',
        'elsherbiny',
        'karam',
        'abdulaziz',
        'bayoumi',
        'tharwat',
        'elshamy',
        'youssef',
        'rizk',
        'ramzy',
        'younes',
        'selim',
    ];
    protected array $firstNameAscii = [
        'ahmed',
        'mostafa',
        'mahmoud',
        'hazem',
        'ehab',
        'karim',
        'dina',
        'maged',
        'mohamed',
        'saif',
        'basma',
        'youssef',
        'hashem',
        'dina',
        'hani',
        'hashem',
    ];

    public function lastNameAscii()
    {
        return $this->randomizer->randomElement($this->lastNameAscii);
    }

    public function firstNameAscii()
    {
        return $this->randomizer->randomElement($this->firstNameAscii);
    }

    /**
     * @example 'ahmad.abbadi'
     */
    public function userName(): string
    {
        $format = $this->randomizer->randomElement($this->userNameFormats);

        return $this->replacer->bothify($this->generator->parse($format));
    }

    /**
     * @example 'wewebit.jo'
     */
    public function domainName(): string
    {
        return $this->randomizer->randomElement($this->lastNameAscii) . '.' . $this->tld();
    }

}
