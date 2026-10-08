<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Test\Languages;

use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\pl_PL\PlPlDefinitionPack;
use PHPUnit\Framework\TestCase;

class PlPlPaymentTest extends TestCase
{
    public function testBankValue(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $bank = $generator->bank();

        self::assertIsString($bank);
        self::assertNotSame('', trim($bank));
    }

    public function testBankAccountNumberDefaultFormat(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $iban = $generator->bankAccountNumber();

        self::assertMatchesRegularExpression('/^PL\d{26}$/', $iban);
    }

    public function testBankAccountNumberRespectsPrefix(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        $prefix = '12345678';
        $iban = $generator->bankAccountNumber(prefix: $prefix, countryCode: 'PL');

        self::assertMatchesRegularExpression('/^PL\d{26}$/', $iban);
        self::assertSame($prefix, substr($iban, 4, strlen($prefix)));
    }

    public function testAddBankCodeChecksumCalculatesCorrectChecksum(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        /** @var \DummyGenerator\Provider\Languages\pl_PL\Payment $payment */
        $payment = $generator->ext(\DummyGenerator\Definitions\Extension\PaymentExtensionInterface::class);

        // First 7 digits: 1, 0, 5, 0, 0, 0, 0
        // Weights: 7*1 + 1*0 + 3*5 + 9*0 + 7*0 + 1*0 + 3*0 = 22 -> 22 % 10 = 2
        $iban = '1050000999999999';
        $result = $payment->addBankCodeChecksum($iban);

        self::assertSame('1050000299999999', $result);
    }

    public function testAddBankCodeChecksumReturnsUnchangedForNonPolishCountryCode(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        /** @var \DummyGenerator\Provider\Languages\pl_PL\Payment $payment */
        $payment = $generator->ext(\DummyGenerator\Definitions\Extension\PaymentExtensionInterface::class);

        $iban = '1050000999999999';
        $result = $payment->addBankCodeChecksum($iban, 'DE');

        self::assertSame($iban, $result);
    }

    public function testAddBankCodeChecksumReturnsUnchangedForShortIban(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());
        /** @var \DummyGenerator\Provider\Languages\pl_PL\Payment $payment */
        $payment = $generator->ext(\DummyGenerator\Definitions\Extension\PaymentExtensionInterface::class);

        $shortIban = '12345';
        $result = $payment->addBankCodeChecksum($shortIban);

        self::assertSame($shortIban, $result);
    }

    public function testBankNamesHaveNoTrailingWhitespace(): void
    {
        $reflection = new \ReflectionClass(\DummyGenerator\Provider\Languages\pl_PL\Payment::class);
        $defaults = $reflection->getDefaultProperties();
        /** @var array<string, string> $banks */
        $banks = $defaults['banks'];
        foreach ($banks as $bank) {
            self::assertSame(trim($bank), $bank, sprintf('Bank name "%s" is padded with whitespace', $bank));
        }
    }

    public function testCurrency(): void
    {
        $generator = DummyGenerator::create()->withProvider(new PlPlDefinitionPack());

        self::assertSame('PLN', $generator->currencyCode());
        self::assertSame('zł', $generator->currencySymbol());
        self::assertSame('Polski złoty', $generator->currencyName());
    }
}
