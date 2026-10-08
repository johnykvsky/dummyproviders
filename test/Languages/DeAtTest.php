<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\de_AT\DeAtDefinitionPack;
use PHPUnit\Framework\TestCase;

class DeAtTest extends TestCase
{
    public function testCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new DeAtDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $uid = $generator->uid();
            self::assertMatchesRegularExpression('/^ATU\d{8}$/', $uid);

            $vatId = $generator->vatId();
            self::assertMatchesRegularExpression('/^ATU\d{8}$/', $vatId);

            $fn = $generator->firmenbuchnummer();
            self::assertMatchesRegularExpression('/^FN \d{6} [a-z]$/', $fn);
        }
    }
}
