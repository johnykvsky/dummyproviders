<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\nl_BE;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    /**
     * International Bank Account Number (IBAN).
     *
     * @param string $prefix      for generating bank account number of a specific bank
     * @param string $countryCode ISO 3166-1 alpha-2 country code
     * @param int    $length      total length without country code and 2 check digits
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     */
    public function bankAccountNumber($prefix = '', $countryCode = 'BE', $length = null): string
    {
        return $this->iban($countryCode, $prefix, $length);
    }

    /**
     * Value Added Tax (VAT).
     *
     * @param bool $spacedNationalPrefix
     * @return string VAT Number
     *
     * @example 'BE0123456789', ('spaced') 'BE 0123456789'
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     */
    public function vat($spacedNationalPrefix = true): string
    {
        $prefix = $spacedNationalPrefix ? 'BE ' : 'BE';

        // Generate 7 numbers of vat.
        $firstSeven = $this->generator->randomNumber(7, true);

        // Generate checksum for number
        $checksum = 97 - fmod($firstSeven, 97);

        // '0' + 7 numbers + checksum
        return sprintf('%s0%s%02d', $prefix, $firstSeven, $checksum);
    }
}
