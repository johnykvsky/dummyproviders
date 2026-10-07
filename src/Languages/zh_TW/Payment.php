<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\zh_TW;

use DummyGenerator\Core\Payment as BasePayment;

/**
 * @deprecated Use {@link \Faker\Provider\Payment} instead
 * @see \Faker\Provider\Payment
 */
class Payment extends BasePayment
{
    /**
     * @return array
     *
     * @deprecated Use {@link $this->generator->creditCardDetails()} instead
     * @see $this->generator->creditCardDetails()
     */
    public function creditCardDetails($valid = true): array
    {
        return parent::creditCardDetails($valid);
    }

}
