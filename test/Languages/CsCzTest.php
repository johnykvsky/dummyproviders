<?php

declare(strict_types = 1);

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

    public function testDateTime(): void
    {
        $generator = DummyGenerator::create()->withProvider(new CsCzDefinitionPack());

        self::assertNotEmpty($generator->dayOfWeek());
        self::assertNotEmpty($generator->monthName());
        self::assertNotEmpty($generator->monthNameGenitive());
        self::assertNotEmpty($generator->formattedDate());
        self::assertNotEmpty($generator->dayOfMonth());
    }

    public function testPerson(): void
    {
        $generator = DummyGenerator::create()->withProvider(new CsCzDefinitionPack());

        self::assertNotEmpty($generator->title());
        self::assertNotEmpty($generator->title('male'));
        self::assertNotEmpty($generator->lastName());
        self::assertNotEmpty($generator->lastName('male'));
        self::assertNotEmpty($generator->birthNumberMale());
        self::assertNotEmpty($generator->birthNumberFemale());
    }
}
