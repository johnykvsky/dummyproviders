<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Extension;

use DummyGenerator\Container\DiContainerFactory;
use DummyGenerator\Core\Randomizer\Randomizer;
use DummyGenerator\Core\Replacer\Replacer;
use DummyGenerator\Core\Transliterator\SimpleTransliterator;
use DummyGenerator\Core\Transliterator\Transliterator;
use DummyGenerator\Definitions\Extension\Exception\ExtensionArgumentException;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\Definitions\Transliterator\TransliteratorInterface;
use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Core\Text;
use DummyGenerator\Provider\Definitions\Extension\TextExtensionInterface;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    private DummyGenerator $generator;

    public function setUp(): void
    {
        parent::setUp();

        $container = DiContainerFactory::base();
        $container->set(RandomizerInterface::class, Randomizer::class);
        $container->set(TransliteratorInterface::class, Transliterator::class);
        $container->set(ReplacerInterface::class, Replacer::class);
        $container->set(TextExtensionInterface::class, Text::class);
        $this->generator = new DummyGenerator($container);
    }

    public function testRealText(): void
    {
        $realText = $this->generator->realText(min: 5, max: 50, indexSize: 3);
        $replacer = $this->generator->ext(ReplacerInterface::class);
        self::assertInstanceOf(ReplacerInterface::class, $replacer);
        $length = $replacer->strlen($realText);
        self::assertTrue($length > 5 && $length <= 51);
    }

    public function testRealTextUsesDefaultBounds(): void
    {
        $realText = $this->generator->realText();
        $replacer = $this->generator->ext(ReplacerInterface::class);
        self::assertInstanceOf(ReplacerInterface::class, $replacer);
        $length = $replacer->strlen($realText);
        self::assertTrue($length > 50 && $length <= 201);
    }

    public function testRealTextMinBelowLimitError(): void
    {
        self::expectException(ExtensionArgumentException::class);
        self::expectExceptionMessage('min must be at least 1');
        $this->generator->realText(min: 0, max: 50, indexSize: 3);
    }

    public function testRealTextMaxBelowLimitError(): void
    {
        self::expectException(ExtensionArgumentException::class);
        self::expectExceptionMessage('max must be at least 10');
        $this->generator->realText(min: 2, max: 5, indexSize: 3);
    }

    public function testRealTextIndexSizeBelowLimitError(): void
    {
        self::expectException(ExtensionArgumentException::class);
        self::expectExceptionMessage('indexSize must be at least 1');
        $this->generator->realText(min: 2, max: 50, indexSize: 0);
    }

    public function testRealTextIndexSizeAboveLimitError(): void
    {
        self::expectException(ExtensionArgumentException::class);
        self::expectExceptionMessage('indexSize must be at most 5');
        $this->generator->realText(min: 2, max: 50, indexSize: 10);
    }

    public function testRealTextMinHigherThanMaxError(): void
    {
        self::expectException(ExtensionArgumentException::class);
        self::expectExceptionMessage('min must be smaller than max');
        $this->generator->realText(min: 20, max: 15, indexSize: 3);
    }

    public function testRealTextConstructor(): void
    {
        $text = <<<'EOT'
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 

Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 

Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 

Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
EOT;

        $randomizer = new Randomizer();
        $generator = $this->generator->withDefinition(TextExtensionInterface::class, new Text(
            $randomizer,
            new Replacer($randomizer, new SimpleTransliterator()),
            $text
        ));

        $realText = $generator->realText(min: 5, max: 50, indexSize: 3);
        $replacer = $this->generator->ext(ReplacerInterface::class);
        self::assertInstanceOf(ReplacerInterface::class, $replacer);
        $length = $replacer->strlen($realText);
        self::assertTrue($length > 5 && $length <= 51);
        self::assertTrue(str_contains($text, rtrim($realText, '.')));
    }
}
