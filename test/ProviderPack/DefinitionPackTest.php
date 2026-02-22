<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\ProviderPack;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Definitions\Extension\TextExtensionInterface;
use DummyGenerator\Provider\Languages\en_GB\EnGbDefinitionPack;
use DummyGenerator\Provider\Languages\en_GB\Text as EnGbText;
use DummyGenerator\Provider\Languages\en_US\EnUsDefinitionPack;
use DummyGenerator\Provider\Languages\en_US\Text as EnUsText;
use DummyGenerator\Provider\Languages\pl_PL\PlPlDefinitionPack;
use DummyGenerator\Provider\Languages\pl_PL\Text as PlPlText;
use PHPUnit\Framework\TestCase;

class DefinitionPackTest extends TestCase
{
    public function testEnUsDefinitionPackRegistersLocaleTextClass(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());

        self::assertInstanceOf(EnUsText::class, $generator->ext(TextExtensionInterface::class));
    }

    public function testEnGbDefinitionPackRegistersLocaleTextClass(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        self::assertInstanceOf(EnGbText::class, $generator->ext(TextExtensionInterface::class));
    }

    public function testPlPlDefinitionPackRegistersLocaleTextClass(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());

        self::assertInstanceOf(PlPlText::class, $generator->ext(TextExtensionInterface::class));
    }
}
