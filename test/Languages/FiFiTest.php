<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\fi_FI\FiFiDefinitionPack;
use PHPUnit\Framework\TestCase;

class FiFiTest extends TestCase
{
    public function testCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new FiFiDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $id = $generator->businessId();
            self::assertMatchesRegularExpression('/^\d{7}-\d$/', $id);

            $yt = $generator->yTunnus();
            self::assertMatchesRegularExpression('/^\d{7}-\d$/', $yt);

            $alv = $generator->alv();
            self::assertMatchesRegularExpression('/^FI\d{8}$/', $alv);

            $vat = $generator->vat();
            self::assertMatchesRegularExpression('/^FI\d{8}$/', $vat);
        }
    }
}
