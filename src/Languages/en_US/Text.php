<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_US;

use DummyGenerator\Provider\Core\Text as BaseText;

class Text extends BaseText
{
    protected string $defaultText = __DIR__ . '/../../resources/en_US.txt';
}
