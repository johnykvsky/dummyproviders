<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\et_EE;

use DummyGenerator\Definitions\DefinitionInterface;
use DummyGenerator\Definitions\Extension\PersonExtensionInterface;
use DummyGenerator\ProviderPack\ProviderPackInterface;

readonly class EtEeDefinitionPack implements ProviderPackInterface
{
    /** @var array<string, class-string<DefinitionInterface>> */
    private array $definitions;

    public function __construct()
    {
        $this->definitions = [
            PersonExtensionInterface::class => Person::class,
        ];
    }

    public function all(): array
    {
        return $this->definitions;
    }
}
