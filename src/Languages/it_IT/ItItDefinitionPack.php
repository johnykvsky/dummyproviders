<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\it_IT;

use DummyGenerator\Definitions\DefinitionInterface;
use DummyGenerator\Definitions\Extension\AddressExtensionInterface;
use DummyGenerator\Definitions\Extension\CompanyExtensionInterface;
use DummyGenerator\Definitions\Extension\InternetExtensionInterface;
use DummyGenerator\Definitions\Extension\PaymentExtensionInterface;
use DummyGenerator\Definitions\Extension\PersonExtensionInterface;
use DummyGenerator\Definitions\Extension\PhoneNumberExtensionInterface;
use DummyGenerator\ProviderPack\ProviderPackInterface;
use DummyGenerator\Provider\Definitions\Extension\TextExtensionInterface;

readonly class ItItDefinitionPack implements ProviderPackInterface
{
    /** @var array<string, class-string<DefinitionInterface>> */
    private array $definitions;

    public function __construct()
    {
        $this->definitions = [
            AddressExtensionInterface::class => Address::class,
            CompanyExtensionInterface::class => Company::class,
            InternetExtensionInterface::class => Internet::class,
            PaymentExtensionInterface::class => Payment::class,
            PersonExtensionInterface::class => Person::class,
            PhoneNumberExtensionInterface::class => PhoneNumber::class,
            TextExtensionInterface::class => Text::class,
        ];
    }

    public function all(): array
    {
        return $this->definitions;
    }
}
