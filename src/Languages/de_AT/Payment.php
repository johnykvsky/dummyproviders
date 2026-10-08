<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\de_AT;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    /**
     * Value Added Tax (VAT)
     *
     * @param bool $spacedNationalPrefix
     * @return string VAT Number
     *
     * @example 'ATU12345678', ('spaced') 'AT U12345678'
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     */
    public function vat($spacedNationalPrefix = true): string
    {
        $prefix = $spacedNationalPrefix ? 'AT U' : 'ATU';

        return sprintf('%s%d', $prefix, $this->generator->randomNumber(8, true));
    }

    /**
     * International Bank Account Number (IBAN)
     *
     * @param string $prefix      for generating bank account number of a specific bank
     * @param string $countryCode ISO 3166-1 alpha-2 country code
     * @param int    $length      total length without country code and 2 check digits
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     */
    public function bankAccountNumber($prefix = '', $countryCode = 'AT', $length = null): string
    {
        return $this->iban($countryCode, $prefix, $length);
    }
}
