<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fa_IR;

use DummyGenerator\Provider\Core\Text as BaseText;
use DummyGenerator\Provider\Definitions\Extension\TextExtensionInterface;

class Text extends BaseText implements TextExtensionInterface
{

    protected function validStart(string $word): bool
    {
        return (bool) preg_match('/^[\x{0600}-\x{06FF}]/u', $word) || parent::validStart($word);
    }
}
