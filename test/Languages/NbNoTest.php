<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\nb_NO\NbNoDefinitionPack;
use PHPUnit\Framework\TestCase;

class NbNoTest extends TestCase
{
    public function testCompanyIdentifiers(): void
    {
        $generator = DummyGenerator::create()->withProvider(new NbNoDefinitionPack());

        for ($i = 0; $i < 20; ++$i) {
            $org = $generator->organisasjonsnummer();
            self::assertMatchesRegularExpression('/^[89]\d{8}$/', $org);

            $weights = [3, 2, 7, 6, 5, 4, 3, 2];
            $sum = 0;
            for ($j = 0; $j < 8; ++$j) {
                $sum += (int) $org[$j] * $weights[$j];
            }
            $rem = $sum % 11;
            $check = $rem === 0 ? 0 : 11 - $rem;
            self::assertSame($check, (int) $org[8]);

            $orgNum = $generator->organisationNumber();
            self::assertMatchesRegularExpression('/^[89]\d{8}$/', $orgNum);

            $mva = $generator->mva();
            self::assertMatchesRegularExpression('/^[89]\d{8} MVA$/', $mva);
        }
    }
}
