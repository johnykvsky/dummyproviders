<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fr_BE;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    /**
     * International Bank Account Number (IBAN)
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     *
     * @param string $prefix      for generating bank account number of a specific bank
     * @param string $countryCode ISO 3166-1 alpha-2 country code
     * @param int    $length      total length without country code and 2 check digits
     *
     * @return string
     */
    public function bankAccountNumber($prefix = '', $countryCode = 'BE', $length = null): string
    {
        return $this->iban($countryCode, $prefix, $length);
    }

    /**
     * Value Added Tax (VAT)
     *
     * @example 'BE0123456789', ('spaced') 'BE 0123456789'
     *
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     *
     * @param bool $spacedNationalPrefix
     *
     * @return string VAT Number
     */
    public function vat($spacedNationalPrefix = true): string
    {
        $prefix = $spacedNationalPrefix ? 'BE ' : 'BE';

        return sprintf('%s0%d', $prefix, $this->generator->randomNumber(9, true));
    }

}
