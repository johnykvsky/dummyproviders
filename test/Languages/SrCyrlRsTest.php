<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\sr_Cyrl_RS\SrCyrlRsDefinitionPack;
use PHPUnit\Framework\TestCase;

class SrCyrlRsTest extends TestCase
{
    public function testInitials(): void
    {
        $generator = DummyGenerator::create()->withProvider(new SrCyrlRsDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $initials = $generator->initials();
            self::assertMatchesRegularExpression('/^[А-ЯЂЈЉЊЋЏ]\. [А-ЯЂЈЉЊЋЏ]\.$/u', $initials);
        }

        $single = $generator->initials(1);
        self::assertMatchesRegularExpression('/^[А-ЯЂЈЉЊЋЏ]\.$/u', $single);
    }
}
