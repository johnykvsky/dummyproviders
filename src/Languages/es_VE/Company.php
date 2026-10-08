<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\es_VE;

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
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} y {{lastName}}',
        '{{lastName}} y {{lastName}} {{companySuffix}}',
        '{{lastName}} de {{lastName}} {{companySuffix}}',
        '{{lastName}} y {{lastName}}',
        '{{lastName}} de {{lastName}}',
    ];

    protected array $companyPrefix = [
        'Asociación', 'Centro', 'Corporación', 'Cooperativa', 'Empresa', 'Gestora', 'Global', 'Grupo', 'Viajes',
        'Inversiones', 'Lic.', 'Dr.',
    ];
    protected array $companySuffix = ['S.R.L.', 'C.A.', 'S.A.', 'R.L.', 'etc'];

    /** @example 'Grupo' */
    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefix);
    }

    /**
     * Generate random Taxpayer Identification Number (RIF in Venezuela). Ex J-123456789-1
     *
     * @param string $separator
     */
    public function taxpayerIdentificationNumber($separator = ''): string
    {
        return $this->randomizer->randomElement(['J', 'G', 'V', 'E', 'P', 'C']) . $separator . $this->replacer->numerify('########') . $separator . $this->replacer->numerify('#');
    }
}
