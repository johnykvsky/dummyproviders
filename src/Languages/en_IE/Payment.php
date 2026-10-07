<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_IE;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    /**
     * International Bank Account Number (IBAN)
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     */
    public function bankAccountNumber(string $prefix = '', string $countryCode = 'IE'): string
    {
        return $this->iban($countryCode, $prefix);
    }
}
