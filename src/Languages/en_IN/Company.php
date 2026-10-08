<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_IN;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
    ];

    protected array $companySuffix = ['Pvt Ltd', 'Limited', 'Ltd', 'LLP', 'and Sons'];

    /**
     * Indian Goods and Services Tax Identification Number (GSTIN)
     * 15 characters with Luhn mod 36 checksum.
     *
     * @example '27AAACT2727Q1ZW'
     */
    public function gstin(): string
    {
        $stateCodes = [
            '01', '02', '03', '04', '05', '06', '07', '08', '09', '10',
            '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',
            '21', '22', '23', '24', '25', '26', '27', '28', '29', '30',
            '31', '32', '33', '34', '35', '36', '37',
        ];
        $state = $this->randomizer->randomElement($stateCodes);

        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $panP1 = $letters[$this->randomizer->getInt(0, 25)] . $letters[$this->randomizer->getInt(0, 25)] . $letters[$this->randomizer->getInt(0, 25)];
        $panP2 = 'C';
        $panP3 = $letters[$this->randomizer->getInt(0, 25)];
        $panDigits = sprintf('%04d', $this->randomizer->getInt(1, 9999));
        $panCheck = $letters[$this->randomizer->getInt(0, 25)];
        $pan = $panP1 . $panP2 . $panP3 . $panDigits . $panCheck;

        $entityNum = (string) $this->randomizer->getInt(1, 9);
        $z = 'Z';

        $base14 = $state . $pan . $entityNum . $z;

        $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $sum = 0;
        for ($i = 0; $i < 14; $i++) {
            $val = (int) strpos($chars, $base14[$i]);
            $factor = ($i % 2 === 0) ? 1 : 2;
            $product = $val * $factor;
            $hash = intdiv($product, 36) + ($product % 36);
            $sum += $hash;
        }

        $rem = $sum % 36;
        $check = $chars[(36 - $rem) % 36];

        return $base14 . $check;
    }

    /**
     * Indian Corporate Identification Number (CIN)
     * 21 characters: [LU][0-9]{5}[A-Z]{2}[0-9]{4}[A-Z]{3}[0-9]{6}.
     *
     * @example 'U72900KA2020PTC134567'
     */
    public function cin(): string
    {
        $listing = $this->randomizer->randomElement(['L', 'U']);
        $industry = sprintf('%05d', $this->randomizer->getInt(10000, 99999));
        $states = ['MH', 'DL', 'KA', 'TN', 'GJ', 'WB', 'TG', 'UP', 'HR', 'KL', 'AP', 'RJ', 'MP'];
        $state = $this->randomizer->randomElement($states);
        $year = (string) $this->randomizer->getInt(1970, 2024);
        $types = ['PTC', 'PLC', 'FTC', 'GOI', 'ULL'];
        $type = $this->randomizer->randomElement($types);
        $regNumber = sprintf('%06d', $this->randomizer->getInt(1, 999999));

        return $listing . $industry . $state . $year . $type . $regNumber;
    }
}
