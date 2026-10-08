<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\is_IS\IsIsDefinitionPack;
use PHPUnit\Framework\TestCase;

class IsIsTest extends TestCase
{
    public function testPersonSsnAndNames(): void
    {
        $generator = DummyGenerator::create()->withProvider(new IsIsDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $ssn = $generator->ssn();
            self::assertMatchesRegularExpression('/^\d{6}-\d{4}$/', $ssn);

            $male = $generator->lastNameMale();
            self::assertStringEndsWith('son', $male);

            $female = $generator->lastNameFemale();
            self::assertStringEndsWith('dóttir', $female);

            self::assertNotEmpty($generator->middleName());
            self::assertNotEmpty($generator->lastName());
        }
    }

    public function testCompanyVsk(): void
    {
        $generator = DummyGenerator::create()->withProvider(new IsIsDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $vsk = $generator->vsk();
            self::assertMatchesRegularExpression('/^[1-9]\d{4}$/', $vsk);
        }
    }
}
