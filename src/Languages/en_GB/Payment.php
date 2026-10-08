<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_GB;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    /** @var string[] */
    protected array $currencyCode = [
        'GBP',
    ];

    /** @var string[] */
    protected array $currencySymbols = [
        '£',
    ];

    /** @var string[] */
    protected array $currencyNames = [
        'Pound Sterling',
    ];
}
