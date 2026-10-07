<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\el_CY;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    /**
     * International Bank Account Number (IBAN).
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     *
     * @param string $prefix      for generating bank account number of a specific bank
     * @param string $countryCode ISO 3166-1 alpha-2 country code
     * @param int    $length      total length without country code and 2 check digits
     *
     * @return string
     */
    public function bankAccountNumber($prefix = '', $countryCode = 'CY', $length = null): string
    {
        return $this->iban($countryCode, $prefix, $length);
    }

    /**
     * @var array Cyprus banks
     *
     * @see http://www.acb.com.cy/cgibin/hweb?-A=206&-V=membership
     */
    protected array $banks = [
        'Τράπεζα Κύπρου',
        'Ελληνική Τράπεζα',
        'Alpha Bank Cyprus',
        'Εθνική Τράπεζα της Ελλάδος (Κύπρου)',
        'USB BANK',
        'Κυπριακή Τράπεζα Αναπτύξεως',
        'Societe Gererale Cyprus',
        'Τράπεζα Πειραιώς (Κύπρου)',
        'RCB Bank',
        'Eurobank Cyprus',
        'Συνεργατική Κεντρική Τράπεζα',
        'Ancoria Bank',
    ];

    /**
     * @example 'Τράπεζα Κύπρου'
     */
    public function bank(): string
    {
        return $this->randomizer->randomElement($this->banks);
    }

}
