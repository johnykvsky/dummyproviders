<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\pl_PL;

use DummyGenerator\Provider\Core\Text as BaseText;

class Text extends BaseText
{
    protected string $defaultText = __DIR__ . '/../../resources/pl_PL.txt';
}
