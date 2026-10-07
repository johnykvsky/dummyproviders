<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fr_CA;

use DummyGenerator\Definitions\DefinitionInterface;
use DummyGenerator\Definitions\Extension\AddressExtensionInterface;
use DummyGenerator\Definitions\Extension\ColorExtensionInterface;
use DummyGenerator\Definitions\Extension\CompanyExtensionInterface;
use DummyGenerator\Definitions\Extension\PersonExtensionInterface;
use DummyGenerator\ProviderPack\ProviderPackInterface;

readonly class FrCaDefinitionPack implements ProviderPackInterface
{
    /** @var array<string, class-string<DefinitionInterface>> */
    private array $definitions;

    public function __construct()
    {
        $this->definitions = [
            AddressExtensionInterface::class => Address::class,
            ColorExtensionInterface::class => Color::class,
            CompanyExtensionInterface::class => Company::class,
            PersonExtensionInterface::class => Person::class,
        ];
    }

    public function all(): array
    {
        return $this->definitions;
    }
}
