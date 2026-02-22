<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_US;

use DummyGenerator\Provider\Core\Text as BaseText;
use DummyGenerator\Provider\Definitions\Extension\TextExtensionInterface;

class Text extends BaseText implements TextExtensionInterface
{
    protected string $defaultText = __DIR__ . '/../../../resources/en_US.txt';
}
