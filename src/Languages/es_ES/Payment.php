<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\es_ES;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    /** @var string[] */
    protected array $currencyCode = [
        'EUR',
    ];

    /** @var string[] */
    protected array $currencySymbols = [
        '€',
    ];

    /** @var string[] */
    protected array $currencyNames = [
        'Euro',
    ];

    private array $vatMap = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'N', 'P', 'Q', 'R', 'S', 'U', 'V', 'W'];

    /**
     * International Bank Account Number (IBAN)
     *
     * @param string $prefix      for generating bank account number of a specific bank
     * @param string $countryCode ISO 3166-1 alpha-2 country code
     * @param int    $length      total length without country code and 2 check digits
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     */
    public function bankAccountNumber($prefix = '', $countryCode = 'ES', $length = null): string
    {
        return $this->iban($countryCode, $prefix, $length);
    }

    /**
     * Value Added Tax (VAT)
     *
     * @return string VAT Number
     *
     * @example 'B93694545'
     * @see https://en.wikipedia.org/wiki/VAT_identification_number
     * @see https://es.wikipedia.org/wiki/C%C3%B3digo_de_identificaci%C3%B3n_fiscal
     */
    public function vat(): string
    {
        $letter = $this->randomizer->randomElement($this->vatMap);
        $number = $this->replacer->numerify('########');

        return $letter . $number;
    }
}
