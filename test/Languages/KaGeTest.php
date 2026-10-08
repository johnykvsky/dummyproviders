<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\ka_GE\KaGeDefinitionPack;
use PHPUnit\Framework\TestCase;

class KaGeTest extends TestCase
{
    public function testDateTime(): void
    {
        $generator = DummyGenerator::create()->withProvider(new KaGeDefinitionPack());

        self::assertContains($generator->dayOfWeek(), [
            'კვირა', 'ორშაბათი', 'სამშაბათი', 'ოთხშაბათი',
            'ხუთშაბათი', 'პარასკევი', 'შაბათი',
        ]);
        self::assertContains($generator->monthName(), [
            'იანვარი', 'თებერვალი', 'მარტი', 'აპრილი', 'მაისი', 'ივნისი',
            'ივლისი', 'აგვისტო', 'სექტემბერი', 'ოქტომბერი', 'ნოემბერი', 'დეკემბერი',
        ]);
    }
}
