<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\da_DK;

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

    /** @var array Danish company name formats. */
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{firstname}} {{lastName}} {{companySuffix}}',
        '{{middleName}} {{companySuffix}}',
        '{{middleName}} {{companySuffix}}',
        '{{middleName}} {{companySuffix}}',
        '{{firstname}} {{middleName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} og {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} og {{lastName}} {{companySuffix}}',
        '{{middleName}} & {{middleName}} {{companySuffix}}',
        '{{middleName}} og {{middleName}} {{companySuffix}}',
        '{{middleName}} & {{lastName}}',
        '{{middleName}} og {{lastName}}',
    ];

    /** @var array Company suffixes. */
    protected array $companySuffix = ['ApS', 'A/S', 'I/S', 'K/S'];

    /**
     * @var string CVR number format.
     *
     * @see http://cvr.dk/Site/Forms/CMS/DisplayPage.aspx?pageid=60
     */
    protected string $cvrFormat = '%#######';

    /**
     * @var string P number (production number) format.
     *
     * @see http://cvr.dk/Site/Forms/CMS/DisplayPage.aspx?pageid=60
     */
    protected string $pFormat = '%#########';

    /**
     * Generates a CVR number (8 digits).
     */
    public function cvr(): string
    {
        return $this->replacer->numerify($this->cvrFormat);
    }

    /**
     * Generates a P entity number (10 digits).
     *
     * @return string
     */
    public function p()
    {
        return $this->replacer->numerify($this->pFormat);
    }
}
