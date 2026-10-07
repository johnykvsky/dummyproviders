<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\kk_KZ;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    protected array $banks = [
        'Қазкоммерцбанк',
        'Халық Банкі',
    ];

    /**
     * @example 'Қазкоммерцбанк'
     */
    public function bank(): string
    {
        return $this->randomizer->randomElement($this->banks);
    }

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
    public function bankAccountNumber($prefix = '', $countryCode = 'KZ', $length = null): string
    {
        return $this->iban($countryCode, $prefix, $length);
    }

}
