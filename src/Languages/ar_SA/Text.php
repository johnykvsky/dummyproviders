<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ar_SA;

use DummyGenerator\Provider\Core\Text as BaseText;
use DummyGenerator\Provider\Definitions\Extension\TextExtensionInterface;

class Text extends BaseText implements TextExtensionInterface
{

    protected function validStart(string $word): bool
    {
        return (bool) preg_match('/^\p{Arabic}/u', $word) || parent::validStart($word);
    }
}
