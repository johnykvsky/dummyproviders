<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\cs_CZ;

use DummyGenerator\Provider\Core\Text as BaseText;
use DummyGenerator\Provider\Definitions\Extension\TextExtensionInterface;

class Text extends BaseText implements TextExtensionInterface
{

    public function realText(int $min = 50, int $max = 200, int $indexSize = 2): string
    {
        $text = parent::realText($min, $max, $indexSize);
        $text = str_replace('„', '', $text);

        return str_replace('“', '', $text);
    }
}
