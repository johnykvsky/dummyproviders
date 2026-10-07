<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ar_JO;

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
        'com', 'jo', 'me', 'net', 'org',
    ];

    protected array $tld = [
        'biz', 'com', 'info', 'jo', 'net', 'org',
    ];

    protected array $lastNameAscii = [
        'abbad', 'abbadi', 'abbas', 'abulebbeh', 'flefel', 'hadi', 'hamad', 'hasan', 'jabri', 'kanaan', 'karam', 'maanee', 'melhem', 'nimry', 'obaisi', 'qasem', 'qawasmee', 'rabee', 'rashwani', 'shami', 'zaloum',
    ];
    protected array $firstNameAscii = [
        'abd', 'abdullah', 'ahmad', 'akram', 'amr', 'bashar', 'bilal', 'fadi', 'ibrahim', 'khaled', 'layth', 'mohammad', 'mutaz', 'omar', 'osama', 'rami', 'saleem', 'samer', 'sami', 'yazan',
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
