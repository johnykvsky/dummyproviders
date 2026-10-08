<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\el_GR\ElGrDefinitionPack;
use PHPUnit\Framework\TestCase;

class ElGrTest extends TestCase
{
    public function testInitials(): void
    {
        $generator = DummyGenerator::create()->withProvider(new ElGrDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $initials = $generator->initials();
            self::assertMatchesRegularExpression('/^[Α-Ω]\. [Α-Ω]\.$/u', $initials);
        }

        $single = $generator->initials(1);
        self::assertMatchesRegularExpression('/^[Α-Ω]\.$/u', $single);
    }
}
