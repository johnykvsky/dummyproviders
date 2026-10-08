<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\ProviderPack;

use DummyGenerator\Definitions\DefinitionInterface;
use DummyGenerator\Definitions\Extension\ExtensionInterface;
use DummyGenerator\ProviderPack\ProviderPackInterface;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionNamedType;

class InterfaceContractTest extends TestCase
{
    /** @return array<string, array{class-string<ProviderPackInterface>}> */
    public static function provideAllDefinitionPacks(): array
    {
        $files = glob(__DIR__ . '/../../src/Languages/*/*DefinitionPack.php');
        $packs = [];

        foreach ($files as $file) {
            $relativePath = str_replace([realpath(__DIR__ . '/../../src/') . '/', '.php'], '', realpath($file) ?: $file);
            $className = 'DummyGenerator\\Provider\\' . str_replace('/', '\\', $relativePath);
            /** @var class-string<ProviderPackInterface> $className */
            $packs[$className] = [$className];
        }

        return $packs;
    }

    #[DataProvider('provideAllDefinitionPacks')]
    public function testDefinitionPackMatchesInterfaceContracts(string $packClass): void
    {
        self::assertTrue(class_exists($packClass), "Class $packClass should exist");
        $pack = new $packClass();
        self::assertInstanceOf(ProviderPackInterface::class, $pack);

        foreach ($pack->all() as $target => $implClass) {
            self::assertTrue(class_exists($implClass), "Implementation $implClass should exist for $target");

            if (interface_exists($target)) {
                $interfaceReflection = new ReflectionClass($target);
                $implReflection = new ReflectionClass($implClass);

                self::assertTrue(
                    $implReflection->implementsInterface($target),
                    "Class $implClass must implement interface $target",
                );

                foreach ($interfaceReflection->getMethods() as $interfaceMethod) {
                    $methodName = $interfaceMethod->getName();
                    self::assertTrue(
                        $implReflection->hasMethod($methodName),
                        "Class $implClass must implement method $methodName from interface $target",
                    );

                    $implMethod = $implReflection->getMethod($methodName);
                    self::assertTrue(
                        $implMethod->isPublic(),
                        "Method $implClass::$methodName must be public",
                    );

                    self::assertLessThanOrEqual(
                        $interfaceMethod->getNumberOfRequiredParameters(),
                        $implMethod->getNumberOfRequiredParameters(),
                        "Method $implClass::$methodName cannot require more parameters than interface $target::$methodName",
                    );

                    if ($interfaceMethod->hasReturnType()) {
                        self::assertTrue(
                            $implMethod->hasReturnType(),
                            "Method $implClass::$methodName must declare a return type compatible with $target::$methodName",
                        );

                        $interfaceReturnType = $interfaceMethod->getReturnType();
                        $implReturnType = $implMethod->getReturnType();

                        if ($interfaceReturnType instanceof ReflectionNamedType && $implReturnType instanceof ReflectionNamedType) {
                            self::assertSame(
                                $interfaceReturnType->getName(),
                                $implReturnType->getName(),
                                "Method $implClass::$methodName return type ({$implReturnType->getName()}) does not match {$target}::$methodName ({$interfaceReturnType->getName()})",
                            );
                            self::assertSame(
                                $interfaceReturnType->allowsNull(),
                                $implReturnType->allowsNull(),
                                "Method $implClass::$methodName nullability does not match {$target}::$methodName",
                            );
                        }
                    }
                }
            } else {
                self::assertTrue(class_exists($target), "Target $target should be an interface or class");
                self::assertSame($target, $implClass);
                self::assertTrue(
                    is_subclass_of($implClass, ExtensionInterface::class) || is_subclass_of($implClass, DefinitionInterface::class),
                    "Class $implClass must implement ExtensionInterface or DefinitionInterface",
                );
            }
        }
    }
}
