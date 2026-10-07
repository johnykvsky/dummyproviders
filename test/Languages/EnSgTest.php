<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_SG\EnSgDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnSgTest extends TestCase
{
    public function testPersonIds(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnSgDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $nric = $generator->nric();
            self::assertMatchesRegularExpression('/^[ST]\d{7}[A-Z]$/', $nric);

            $fin = $generator->fin();
            self::assertMatchesRegularExpression('/^[FG]\d{7}[A-Z]$/', $fin);

            $id = $generator->singaporeId();
            self::assertMatchesRegularExpression('/^[STFG]\d{7}[A-Z]$/', $id);
        }
    }

    public function testPhoneNumbers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnSgDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $mobile = $generator->mobileNumber();
            self::assertNotEmpty($mobile);

            $fixed = $generator->fixedLineNumber();
            self::assertNotEmpty($fixed);
        }
    }
}
