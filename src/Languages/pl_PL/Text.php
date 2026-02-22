<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\pl_PL;

use DummyGenerator\Provider\Core\Text as BaseText;
use DummyGenerator\Provider\Definitions\Extension\TextExtensionInterface;

class Text extends BaseText implements TextExtensionInterface
{
    protected string $defaultText = __DIR__ . '/../../../resources/pl_PL.txt';
}
