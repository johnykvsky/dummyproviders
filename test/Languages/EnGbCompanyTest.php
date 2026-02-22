<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_GB\Company;
use DummyGenerator\Provider\Languages\en_GB\EnGbDefinitionPack;
use PHPUnit\Framework\TestCase;

class EnGbCompanyTest extends TestCase
{
    public function testStandardVatHasExpectedBlockLengths(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        for ($i = 0; $i < 200; ++$i) {
            $vat = $generator->vat();
            self::assertMatchesRegularExpression('/^GB\d{3} \d{4} \d{2}$/', $vat);
        }
    }

    public function testStandardVatHasExpectedChecksum(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        for ($i = 0; $i < 100; ++$i) {
            $vat = $generator->vat();
            preg_match('/^GB(\d{3}) (\d{4}) (\d{2})$/', $vat, $parts);

            $input = $parts[1] . $parts[2];
            self::assertSame($parts[3], $this->calculateModulus97($input));
        }
    }

    public function testBranchVatHasExpectedStructure(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        for ($i = 0; $i < 50; ++$i) {
            $vat = $generator->vat(Company::VAT_TYPE_BRANCH);
            self::assertMatchesRegularExpression('/^GB\d{3} \d{4} \d{2} \d{3}$/', $vat);
        }
    }

    public function testGovernmentVatHasExpectedRange(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        for ($i = 0; $i < 50; ++$i) {
            $vat = $generator->vat(Company::VAT_TYPE_GOVERNMENT);
            self::assertMatchesRegularExpression('/^GBGD\d{3}$/', $vat);
            self::assertGreaterThanOrEqual(0, (int) substr($vat, 4));
            self::assertLessThanOrEqual(499, (int) substr($vat, 4));
        }
    }

    public function testHealthAuthorityVatHasExpectedRange(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());

        for ($i = 0; $i < 50; ++$i) {
            $vat = $generator->vat(Company::VAT_TYPE_HEALTH_AUTHORITY);
            self::assertMatchesRegularExpression('/^GBHA\d{3}$/', $vat);
            self::assertGreaterThanOrEqual(500, (int) substr($vat, 4));
            self::assertLessThanOrEqual(999, (int) substr($vat, 4));
        }
    }

    public function testCalculateModulus97ThrowsForInvalidLength(): void
    {
        $generator = DummyGenerator::create()->withProvider(new EnGbDefinitionPack());
        $company = $generator->ext(\DummyGenerator\Definitions\Extension\CompanyExtensionInterface::class);

        self::assertInstanceOf(Company::class, $company);

        $method = new \ReflectionMethod(Company::class, 'calculateModulus97');
        $method->setAccessible(true);

        self::expectException(\InvalidArgumentException::class);
        $method->invoke($company, '123456');
    }

    private function calculateModulus97(string $input): string
    {
        $digits = str_split($input);
        $multiplier = 8;
        $sum = 0;

        foreach ($digits as $digit) {
            $sum += (int) $digit * $multiplier;
            --$multiplier;
        }

        $sum += 55;

        while ($sum > 0) {
            $sum -= 97;
        }

        return str_pad((string) (-1 * $sum), 2, '0', STR_PAD_LEFT);
    }
}
