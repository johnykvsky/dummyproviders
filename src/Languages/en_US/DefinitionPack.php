<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_US;

use DummyGenerator\Definitions\DefinitionInterface;
use DummyGenerator\Definitions\Extension\AddressExtensionInterface;
use DummyGenerator\Definitions\Extension\CompanyExtensionInterface;
use DummyGenerator\Definitions\Extension\PaymentExtensionInterface;
use DummyGenerator\Definitions\Extension\PersonExtensionInterface;
use DummyGenerator\Definitions\Extension\PhoneNumberExtensionInterface;
use DummyGenerator\Provider\Core\Text;
use DummyGenerator\Provider\Definitions\Extension\TextExtensionInterface;
use DummyGenerator\ProviderPack\ProviderPackInterface;

readonly class DefinitionPack implements ProviderPackInterface
{
    /** @var array<string, class-string<DefinitionInterface>> */
    private array $definitions;

    public function __construct()
    {
        $this->definitions = [
            AddressExtensionInterface::class => Address::class,
            CompanyExtensionInterface::class => Company::class,
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
