<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\at_AT;

use DummyGenerator\Definitions\DefinitionInterface;
use DummyGenerator\Definitions\Extension\PaymentExtensionInterface;
use DummyGenerator\ProviderPack\ProviderPackInterface;

readonly class AtAtDefinitionPack implements ProviderPackInterface
{
    /** @var array<string, class-string<DefinitionInterface>> */
    private array $definitions;

    public function __construct()
    {
        $this->definitions = [
            PaymentExtensionInterface::class => Payment::class,
        ];
    }

    public function all(): array
    {
        return $this->definitions;
    }
}
