<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\nl_BE;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected array $companySuffix = ['VZW', 'Comm.V', 'VOF', 'BVBA', 'EBVBA', 'ESV', 'NV', 'Comm.VA', 'CVOA', 'CVBA', '& Zonen', '& Zn'];

    /**
     * Belgian Enterprise Number (Kruispuntbank van Ondernemingen / KBO - Banque-Carrefour des Entreprises / BCE)
     *
     * 10 digits with Modulo 97 checksum
     *
     * @see https://nl.wikipedia.org/wiki/Kruispuntbank_van_Ondernemingen
     */
    public function kbo(bool $formatted = true): string
    {
        $prefix = $this->randomizer->randomElement(['0', '1']);
        $base7 = sprintf('%07d', $this->randomizer->getInt(100000, 9999999));
        $base8 = $prefix . $base7;
        $check = 97 - (((int) $base8) % 97);
        $full = sprintf('%s%02d', $base8, $check);

        if ($formatted) {
            return sprintf('%s.%s.%s', substr($full, 0, 4), substr($full, 4, 3), substr($full, 7, 3));
        }

        return $full;
    }

    public function bce(bool $formatted = true): string
    {
        return $this->kbo($formatted);
    }

    public function vat(bool $formatted = true): string
    {
        if ($formatted) {
            return 'BE ' . $this->kbo(true);
        }

        return 'BE' . $this->kbo(false);
    }
}
