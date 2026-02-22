<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\pl_PL\LicensePlate;
use DummyGenerator\Provider\Languages\pl_PL\PlPlDefinitionPack;
use PHPUnit\Framework\TestCase;

class PlPlLicensePlateTest extends TestCase
{
    public function testDefaultLicensePlateFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $licensePlate = $generator->ext(LicensePlate::class);

        self::assertInstanceOf(LicensePlate::class, $licensePlate);

        $plate = $licensePlate->licensePlate();
        self::assertMatchesRegularExpression('/^[A-Z]{2,3} [A-Z0-9]{4,5}$/', $plate);
    }

    public function testSpecialLicensePlateGenerationProducesValidFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $licensePlate = $generator->ext(LicensePlate::class);

        self::assertInstanceOf(LicensePlate::class, $licensePlate);

        for ($i = 0; $i < 50; ++$i) {
            $plate = $licensePlate->licensePlate(
                special: true,
                voivodeships: ['army' => ['U']],
            );
            self::assertMatchesRegularExpression('/^U[A-Z] [A-Z0-9]{5}$/', $plate);
        }
    }

    public function testLicensePlateHonorsVoivodeshipAndCountyFilters(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $licensePlate = $generator->ext(LicensePlate::class);

        self::assertInstanceOf(LicensePlate::class, $licensePlate);

        for ($i = 0; $i < 30; ++$i) {
            $plate = $licensePlate->licensePlate(
                special: false,
                voivodeships: ['mazowieckie' => ['W', 'A']],
                counties: ['białobrzeski' => ['BR']],
            );

            self::assertMatchesRegularExpression('/^[WA]BR [A-Z0-9]{4,5}$/', $plate);
        }
    }

    public function testLicensePlateUsesFallbackWhenCountiesEntryIsMissing(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $licensePlate = $generator->ext(LicensePlate::class);

        self::assertInstanceOf(LicensePlate::class, $licensePlate);

        $countiesProperty = new \ReflectionProperty(LicensePlate::class, 'counties');
        $countiesProperty->setAccessible(true);
        $countiesProperty->setValue($licensePlate, []);

        $plate = $licensePlate->licensePlate(
            special: true,
            voivodeships: ['army' => ['U']],
        );

        self::assertMatchesRegularExpression('/^U [A-Z0-9]{5}$/', $plate);
    }
}
