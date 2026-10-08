<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\bg_BG\BgBgDefinitionPack;
use PHPUnit\Framework\TestCase;

class BgBgTest extends TestCase
{
    public function testInitials(): void
    {
        $generator = DummyGenerator::create()->withProvider(new BgBgDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $initials = $generator->initials();
            self::assertMatchesRegularExpression('/^[А-Я]\. [А-Я]\.$/u', $initials);
        }

        $single = $generator->initials(1);
        self::assertMatchesRegularExpression('/^[А-Я]\.$/u', $single);
    }
}
