<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\pl_PL;

use DummyGenerator\Definitions\DefinitionInterface;
use DummyGenerator\Definitions\Extension\AddressExtensionInterface;
use DummyGenerator\Definitions\Extension\ColorExtensionInterface;
use DummyGenerator\Definitions\Extension\CompanyExtensionInterface;
use DummyGenerator\Definitions\Extension\DateTimeExtensionInterface;
use DummyGenerator\Definitions\Extension\InternetExtensionInterface;
use DummyGenerator\Definitions\Extension\PaymentExtensionInterface;
use DummyGenerator\Definitions\Extension\PersonExtensionInterface;
use DummyGenerator\Definitions\Extension\PhoneNumberExtensionInterface;
use DummyGenerator\Provider\Core\Text;
use DummyGenerator\Provider\Definitions\Extension\TextExtensionInterface;
use DummyGenerator\ProviderPack\ProviderPackInterface;

readonly class PlPlDefinitionPack implements ProviderPackInterface
{
    /** @var array<string, class-string<DefinitionInterface>> */
    private array $definitions;

    public function __construct()
    {
        $this->definitions = [
            AddressExtensionInterface::class => Address::class,
            ColorExtensionInterface::class => Color::class,
            CompanyExtensionInterface::class => Company::class,
            DateTimeExtensionInterface::class => DateTime::class,
            InternetExtensionInterface::class => Internet::class,
            LicensePlate::class => LicensePlate::class,
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
