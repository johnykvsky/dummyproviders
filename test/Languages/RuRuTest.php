<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\ru_RU\RuRuDefinitionPack;
use PHPUnit\Framework\TestCase;

class RuRuTest extends TestCase
{
    public function testCompanyInnAndKpp(): void
    {
        $generator = DummyGenerator::create()->withProvider(new RuRuDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $inn = $generator->inn10();
            self::assertMatchesRegularExpression('/^\d{10}$/', $inn);

            $kpp = $generator->kpp();
            self::assertMatchesRegularExpression('/^\d{4}01001$/', $kpp);
        }
    }

    public function testPersonMiddleNames(): void
    {
        $generator = DummyGenerator::create()->withProvider(new RuRuDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $middleMale = $generator->middleNameMale();
            self::assertIsString($middleMale);
            self::assertNotEmpty($middleMale);

            $middleFemale = $generator->middleNameFemale();
            self::assertIsString($middleFemale);
            self::assertNotEmpty($middleFemale);
        }
    }

    public function testPersonInn12(): void
    {
        $generator = DummyGenerator::create()->withProvider(new RuRuDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $inn = $generator->inn12();
            self::assertMatchesRegularExpression('/^\d{12}$/', $inn);
            self::assertTrue($generator->inn12IsValid($inn));
        }

        self::assertSame('77', substr($generator->inn12('77'), 0, 2));
        self::assertSame('02', substr($generator->inn12(2), 0, 2));

        self::assertSame('36', $generator->inn12Checksum('6478744544'));
        self::assertSame('63', $generator->inn12Checksum('5399119774'));
        self::assertSame('88', $generator->inn12Checksum('1803813512'));

        self::assertTrue($generator->inn12IsValid('647874454436'));
        self::assertTrue($generator->inn12IsValid('425577567121'));
        self::assertFalse($generator->inn12IsValid('111111111111'));
        self::assertFalse($generator->inn12IsValid('012345678901'));
    }

    public function testBankNamesContainNoMarkupOrDoubleSpaces(): void
    {
        $reflection = new \ReflectionClass(\DummyGenerator\Provider\Languages\ru_RU\Payment::class);
        $defaults = $reflection->getDefaultProperties();
        /** @var array<int, string> $banks */
        $banks = $defaults['banks'];
        foreach ($banks as $bank) {
            self::assertDoesNotMatchRegularExpression('/&[a-z]+;/i', $bank);
            self::assertDoesNotMatchRegularExpression('/ {2,}/', $bank);
            self::assertSame(trim($bank), $bank);
        }
    }

    public function testCompanyDataContainsNoLatinCharacters(): void
    {
        $reflection = new \ReflectionClass(\DummyGenerator\Provider\Languages\ru_RU\Company::class);
        $defaults = $reflection->getDefaultProperties();

        foreach (['companyElements', 'companyNameSuffixes'] as $property) {
            /** @var array<int, string> $items */
            $items = $defaults[$property];
            foreach ($items as $value) {
                self::assertDoesNotMatchRegularExpression('/[A-Za-z]/', $value, "Property $property contains Latin chars in $value");
            }
        }
    }
}
