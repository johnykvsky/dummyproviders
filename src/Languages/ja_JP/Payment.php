<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ja_JP;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    /** @var string[] */
    protected array $currencyCode = [
        'JPY',
    ];

    /** @var string[] */
    protected array $currencySymbols = [
        '¥',
    ];

    /** @var string[] */
    protected array $currencyNames = [
        'Japanese Yen',
    ];
}
