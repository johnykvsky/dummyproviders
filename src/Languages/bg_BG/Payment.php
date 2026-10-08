<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\bg_BG;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    /**
     * International Bank Account Number (IBAN)
     *
     * @param string $prefix      for generating bank account number of a specific bank
     * @param string $countryCode ISO 3166-1 alpha-2 country code
     * @param int    $length      total length without country code and 2 check digits
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     */
    public function bankAccountNumber($prefix = '', $countryCode = 'BG', $length = null): string
    {
        return $this->iban($countryCode, $prefix, $length);
    }

    /**
     * Value Added Tax (VAT)
     *
     * @param bool $spacedNationalPrefix
     * @return string VAT Number
     *
     * @example 'BG1234567890', ('spaced') 'BG 1234567890'
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     */
    public function vat($spacedNationalPrefix = true): string
    {
        $prefix = $spacedNationalPrefix ? 'BG ' : 'BG';

        return sprintf(
            '%s%d%d',
            $prefix,
            $this->generator->randomNumber(5, true), // workaround for mt_getrandmax() limitation
            $this->generator->randomNumber($this->randomizer->randomElement([4, 5]), true),
        );
    }
}
