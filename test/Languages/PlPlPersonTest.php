<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\Definitions\Extension\PersonExtensionInterface;
use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\pl_PL\PlPlDefinitionPack;
use PHPUnit\Framework\TestCase;

class PlPlPersonTest extends TestCase
{
    public function testLastNameVariants(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());

        self::assertNotSame('', $generator->lastName());
        self::assertNotSame('', $generator->lastName(PersonExtensionInterface::GENDER_MALE));
        self::assertNotSame('', $generator->lastName(PersonExtensionInterface::GENDER_FEMALE));
    }

    public function testLastNameMaleValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        self::assertNotSame('', $generator->lastNameMale());
    }

    public function testLastNameFemaleValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        self::assertNotSame('', $generator->lastNameFemale());
    }

    public function testTitleVariants(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $allowed = ['mgr', 'inż.', 'dr', 'doc.'];

        self::assertContains($generator->title(), $allowed);
        self::assertContains($generator->title(PersonExtensionInterface::GENDER_MALE), $allowed);
        self::assertContains($generator->title(PersonExtensionInterface::GENDER_FEMALE), $allowed);
        self::assertContains($generator->titleMale(), $allowed);
        self::assertContains($generator->titleFemale(), $allowed);
    }

    public function testPeselFormatChecksumAndSexBit(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $birthdate = new \DateTimeImmutable('1999-12-31');

        $peselMale = $generator->pesel($birthdate, 'M');
        self::assertMatchesRegularExpression('/^\d{11}$/', $peselMale);
        self::assertSame(1, ((int) $peselMale[9]) % 2);
        self::assertSame((int) $peselMale[10], $this->peselChecksum(substr($peselMale, 0, 10)));

        $peselFemale = $generator->pesel($birthdate, 'F');
        self::assertMatchesRegularExpression('/^\d{11}$/', $peselFemale);
        self::assertSame(0, ((int) $peselFemale[9]) % 2);
        self::assertSame((int) $peselFemale[10], $this->peselChecksum(substr($peselFemale, 0, 10)));
    }

    public function testPeselWithNullBirthdate(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $pesel = $generator->pesel(null, 'M');

        self::assertMatchesRegularExpression('/^\d{11}$/', $pesel);
        self::assertSame(1, ((int) $pesel[9]) % 2);
        self::assertSame((int) $pesel[10], $this->peselChecksum(substr($pesel, 0, 10)));
    }

    public function testPersonalIdentityNumberFormatAndChecksum(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $number = $generator->personalIdentityNumber();

        self::assertMatchesRegularExpression('/^[A-Z]{3}\d{6}$/', $number);
        self::assertSame('A', $number[0]);

        $letters = substr($number, 0, 3);
        $digits = substr($number, 3, 6);

        self::assertSame((int) $digits[0], $this->personalIdChecksum($letters, substr($digits, 1)));
    }

    public function testTaxpayerIdentificationNumberFormatAndChecksum(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $number = $generator->taxpayerIdentificationNumber();

        self::assertMatchesRegularExpression('/^\d{10}$/', $number);
        self::assertNotSame('0', $number[0]);
        self::assertNotSame('0', $number[1]);
        self::assertNotSame('0', $number[2]);
        self::assertSame((int) $number[9], $this->taxpayerIdChecksum(substr($number, 0, 9)));
    }

    private function peselChecksum(string $digits): int
    {
        $weights = [1, 3, 7, 9, 1, 3, 7, 9, 1, 3];
        $sum = 0;

        for ($i = 0; $i < 10; ++$i) {
            $sum += (int) $digits[$i] * $weights[$i];
        }

        return (10 - ($sum % 10)) % 10;
    }

    private function personalIdChecksum(string $letters, string $lastFiveDigits): int
    {
        $weights = [7, 3, 1, 7, 3, 1, 7, 3];
        $sum = 0;

        for ($i = 0; $i < 3; ++$i) {
            $sum += $weights[$i] * (ord($letters[$i]) - 55);
        }

        for ($i = 0; $i < 5; ++$i) {
            $sum += $weights[$i + 3] * (int) $lastFiveDigits[$i];
        }

        return $sum % 10;
    }

    private function taxpayerIdChecksum(string $digits): int
    {
        $weights = [6, 5, 7, 2, 3, 4, 5, 6, 7];
        $sum = 0;

        for ($i = 0; $i < 9; ++$i) {
            $sum += (int) $digits[$i] * $weights[$i];
        }

        return $sum % 11;
    }
}
