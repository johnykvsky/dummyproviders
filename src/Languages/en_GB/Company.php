<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_GB;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    public const string VAT_PREFIX = 'GB';
    public const string VAT_TYPE_DEFAULT = 'vat';
    public const string VAT_TYPE_BRANCH = 'branch';
    public const string VAT_TYPE_GOVERNMENT = 'gov';
    public const string VAT_TYPE_HEALTH_AUTHORITY = 'health';

    /**
     * UK VAT number
     *
     * This method produces numbers that are _reasonably_ representative
     * of those issued by government
     *
     * @see https://en.wikipedia.org/wiki/VAT_identification_number#VAT_numbers_by_country
     */
    public function vat(?string $type = null): string
    {
        return match ($type) {
            self::VAT_TYPE_BRANCH => $this->generateBranchTraderVatNumber(),
            self::VAT_TYPE_GOVERNMENT => $this->generateGovernmentVatNumber(),
            self::VAT_TYPE_HEALTH_AUTHORITY => $this->generateHealthAuthorityVatNumber(),
            default => $this->generateStandardVatNumber(),
        };
    }

    /**
     * Standard
     * 9 digits (block of 3, block of 4, block of 2)
     *
     * This uses the format introduced November 2009 onward where the first
     * block starts from 100 and the final two digits are generated via a the
     * modulus 9755 algorithm
     */
    private function generateStandardVatNumber(): string
    {
        $firstBlock = $this->randomizer->getInt(100, 999);
        $secondBlock = $this->generator->randomNumber(4, true);

        return sprintf(
            '%s%d %d %d',
            self::VAT_PREFIX,
            $firstBlock,
            $secondBlock,
            $this->calculateModulus97($firstBlock . $secondBlock),
        );
    }

    /**
     * Health authorities
     * the letters HA then 3 digits from 500 to 999 (e.g. GBHA599)
     */
    private function generateHealthAuthorityVatNumber(): string
    {
        return sprintf(
            '%sHA%d',
            self::VAT_PREFIX,
            $this->randomizer->getInt(500, 999),
        );
    }

    /**
     * Branch traders
     * 12 digits (as for 9 digits, followed by a block of 3 digits)
     */
    private function generateBranchTraderVatNumber(): string
    {
        return sprintf(
            '%s %d',
            $this->generateStandardVatNumber(),
            $this->generator->randomNumber(3, true),
        );
    }

    /**
     * Government departments
     * the letters GD then 3 digits from 000 to 499 (e.g. GBGD001)
     */
    private function generateGovernmentVatNumber(): string
    {
        return sprintf(
            '%sGD%s',
            self::VAT_PREFIX,
            str_pad((string) $this->randomizer->getInt(0, 499), 3, '0', STR_PAD_LEFT),
        );
    }

    /**
     * Apply a Modulus97 algorithm to an input
     *
     * @see https://library.croneri.co.uk/cch_uk/bvr/43-600
     */
    private function calculateModulus97(string $input, bool $use9755 = true): string
    {
        $digits = str_split($input);

        if (count($digits) !== 7) {
            throw new \InvalidArgumentException();
        }

        $multiplier = 8;
        $sum = 0;

        foreach ($digits as $digit) {
            $sum += (int) $digit * $multiplier;
            --$multiplier;
        }

        if ($use9755) {
            $sum += 55;
        }

        while ($sum > 0) {
            $sum -= 97;
        }

        $sum *= -1;

        return str_pad((string) $sum, 2, '0', STR_PAD_LEFT);
    }
}
