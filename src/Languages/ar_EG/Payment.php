<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ar_EG;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    /**
     * International Bank Account Number (IBAN)
     *
     * @see https://www.upiqrcode.com/iban-generator/eg/egypt
     */
    public function bankAccountNumber() : string
    {
        return $this->iban('EG', '', 25);
    }

}
