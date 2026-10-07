<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_PH;

use DummyGenerator\Definitions\DefinitionInterface;
use DummyGenerator\Definitions\Extension\AddressExtensionInterface;
use DummyGenerator\Definitions\Extension\PhoneNumberExtensionInterface;
use DummyGenerator\ProviderPack\ProviderPackInterface;

readonly class EnPhDefinitionPack implements ProviderPackInterface
{
    /** @var array<string, class-string<DefinitionInterface>> */
    private array $definitions;

    public function __construct()
    {
        $this->definitions = [
            AddressExtensionInterface::class => Address::class,
            PhoneNumberExtensionInterface::class => PhoneNumber::class,
        ];
    }

    public function all(): array
    {
        return $this->definitions;
    }
}
