<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\zh_TW;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    public function creditCardDetails(bool $valid = true): array
    {
        return parent::creditCardDetails($valid);
    }
}
