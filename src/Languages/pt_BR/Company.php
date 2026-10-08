<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\pt_BR;

use DummyGenerator\Core\Company as BaseCompany;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

class Company extends BaseCompany
{
    public function __construct(
        RandomizerInterface $randomizer,
        GeneratorInterface $generator,
        protected ReplacerInterface $replacer,
    ) {
        parent::__construct($randomizer, $generator);
    }

    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}} e {{lastName}}',
        '{{lastName}} e {{lastName}} {{companySuffix}}',
        '{{lastName}} Comercial Ltda.',
    ];

    protected array $companySuffix = ['e Filhos', 'e Associados', 'Ltda.', 'S.A.'];

    /**
     * A random CNPJ number.
     *
     * @param bool $formatted If the number should have dots/slashes/dashes or not.
     *
     * @see http://en.wikipedia.org/wiki/CNPJ
     */
    public function cnpj($formatted = true): string
    {
        $n = $this->generator->numerify('########0001');
        $n .= CheckDigit::check($n);
        $n .= CheckDigit::check($n);

        return $formatted ? vsprintf('%d%d.%d%d%d.%d%d%d/%d%d%d%d-%d%d', str_split($n)) : $n;
    }

    /**
     * A random CNPJ alphanumeric.
     *
     * @param bool $formatted If the number should have dots/slashes/dashes or not.
     *
     * @see http://en.wikipedia.org/wiki/CNPJ
     */
    public function cnpjAlpha(bool $formatted = true): string
    {
        $pool = array_merge(range('A', 'Z'), range('0', '9'));
        $n = '';
        for ($i = 0; $i < 8; ++$i) {
            $n .= $this->randomizer->randomElement($pool);
        }

        $n .= '0001';
        $n .= (string) CheckDigit::checkAlpha($n);
        $n .= (string) CheckDigit::checkAlpha($n);

        return $formatted ? vsprintf('%s%s.%s%s%s.%s%s%s/%s%s%s%s-%s%s', str_split($n)) : $n;
    }
}
