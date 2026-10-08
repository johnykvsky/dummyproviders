<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\mn_MN\MnMnDefinitionPack;
use PHPUnit\Framework\TestCase;

class MnMnTest extends TestCase
{
    public function testPersonIdNumber(): void
    {
        $generator = DummyGenerator::create()->withProvider(new MnMnDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $id = $generator->idNumber();
            self::assertMatchesRegularExpression('/^\p{Cyrillic}{2}\d{8}$/u', $id);

            self::assertNotEmpty($generator->alphabet());
            self::assertNotEmpty($generator->namePrefix());
        }
    }
}
