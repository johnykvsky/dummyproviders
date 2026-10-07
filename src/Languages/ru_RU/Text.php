<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ru_RU;

use DummyGenerator\Provider\Core\Text as BaseText;
use DummyGenerator\Provider\Definitions\Extension\TextExtensionInterface;

class Text extends BaseText implements TextExtensionInterface
{

    public function realText(int $min = 50, int $max = 200, int $indexSize = 2): string
    {
        $realText = parent::realText($min, $max, $indexSize);

        return mb_scrub($realText, 'UTF-8');
    }
}
