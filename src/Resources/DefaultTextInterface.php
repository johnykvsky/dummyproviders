<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Resources;

use DummyGenerator\Definitions\DefinitionInterface;

interface DefaultTextInterface extends DefinitionInterface
{
    public function getText(): string;
}
