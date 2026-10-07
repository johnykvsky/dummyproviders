<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\cs_CZ\CsCzDefinitionPack;
use PHPUnit\Framework\TestCase;

class CsCzTest extends TestCase
{
    public function testDic(): void
    {
        $generator = DummyGenerator::create()->withProvider(new CsCzDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $dic = $generator->dic();
            self::assertMatchesRegularExpression('/^CZ\d{8}$/', $dic);
        }
    }
}
