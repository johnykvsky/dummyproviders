<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\hy_AM;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} եղբայրներ',
    ];

    protected array $catchPhraseWords = [

    ];

    protected array $bsWords = [

    ];

    protected array $companySuffix = ['ՍՊԸ', 'և որդիներ', 'ՓԲԸ', 'ԲԲԸ'];

    /** @example 'Robust full-range hub' */
    public function catchPhrase(): string
    {
        $result = [];

        foreach ($this->catchPhraseWords as &$word) {
            $result[] = $this->randomizer->randomElement($word);
        }

        return implode(' ', $result);
    }

    /** @example 'integrate extensible convergence' */
    public function bs(): string
    {
        $result = [];

        foreach ($this->bsWords as &$word) {
            $result[] = $this->randomizer->randomElement($word);
        }

        return implode(' ', $result);
    }
}
