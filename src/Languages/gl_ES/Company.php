<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\gl_ES;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    /** @var string[] */
    protected array $formats = [
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}}-{{lastName}}',
        '{{lastName}}-{{lastName}} {{companySuffix}}',
        '{{lastName}} e {{lastName}} {{companySuffix}}',
        '{{lastName}}, {{lastName}} e {{lastName}} {{companySuffix}}',
        '{{lastName}} e Fillos {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}} e {{lastName}}',
    ];

    /** @var string[] */
    protected array $companyPrefix = [
        'Adegas', 'Asociación', 'Conservas', 'Construcións', 'Distribucións', 'Grupo', 'Mariscos', 'Obradoiro', 'Transportes', 'Viaxes',
    ];

    /** @var string[] */
    protected array $companySuffix = ['S.L.', 'S.L.U.', 'S.A.', 'S.Coop.Galega'];

    /** @example 'Conservas' */
    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefix);
    }
}
