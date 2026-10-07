<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\ProviderPack;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Definitions\Extension\PersonExtensionInterface;
use DummyGenerator\Provider\Languages\en_GB\EnGbDefinitionPack;
use DummyGenerator\Provider\Languages\en_GB\Person as EnGbPerson;
use DummyGenerator\Provider\Languages\en_US\EnUsDefinitionPack;
use DummyGenerator\Provider\Languages\en_US\Person as EnUsPerson;
use DummyGenerator\Provider\Languages\pl_PL\PlPlDefinitionPack;
use DummyGenerator\Provider\Languages\pl_PL\Person as PlPlPerson;
use DummyGenerator\ProviderPack\ProviderPackInterface;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class DefinitionPackTest extends TestCase
{
    public function testEnUsDefinitionPackRegistersLocalePersonClass(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());

        self::assertInstanceOf(EnUsPerson::class, $generator->ext(PersonExtensionInterface::class));
    }

    public function testEnGbDefinitionPackRegistersLocalePersonClass(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        self::assertInstanceOf(EnGbPerson::class, $generator->ext(PersonExtensionInterface::class));
    }

    public function testPlPlDefinitionPackRegistersLocalePersonClass(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());

        self::assertInstanceOf(PlPlPerson::class, $generator->ext(PersonExtensionInterface::class));
    }

    /**
     * @return array<string, array{string}>
     */
    public static function provideAllDefinitionPacks(): array
    {
        $files = glob(__DIR__ . '/../../src/Languages/*/*DefinitionPack.php');
        $packs = [];

        foreach ($files as $file) {
            $relativePath = str_replace([realpath(__DIR__ . '/../../src/') . '/', '.php'], '', realpath($file) ?: $file);
            $className = 'DummyGenerator\\Provider\\' . str_replace('/', '\\', $relativePath);
            $packs[$className] = [$className];
        }

        return $packs;
    }

    #[DataProvider('provideAllDefinitionPacks')]
    public function testDefinitionPackCanBeInstantiatedAndRegistered(string $packClass): void
    {
        self::assertTrue(class_exists($packClass), "Class $packClass should exist");
        $pack = new $packClass();
        self::assertInstanceOf(ProviderPackInterface::class, $pack);

        $generator = DummyGenerator::create()->withProvider($pack);
        self::assertInstanceOf(DummyGenerator::class, $generator);

        foreach ($pack->all() as $interface => $implClass) {
            self::assertTrue(class_exists($implClass), "Implementation $implClass should exist for $interface");
            $ext = $generator->ext($interface);
            self::assertInstanceOf($implClass, $ext);
        }
    }
}
