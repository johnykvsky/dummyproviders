<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ka_GE;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    /** @see list of Georgian banks (2015-12-26), source: https://www.nbg.gov.ge/index.php?m=403 */
    protected array $banks = [
        'ბანკი რესპუბლიკა',
        'თიბისი ბანკი',
        'საქართველოს ბანკი',
        'ლიბერთი ბანკი',
        'ბაზისბანკი',
        'ვითიბი ბანკი ჯორჯია',
        'ბანკი ქართუ',
        'პროკრედიტ ბანკი',
        'სილქ როუდ ბანკი ',
        'კაპიტალ ბანკი ',
        'აზერბაიჯანის საერთაშორისო ბანკი - საქართველო ',
        'ზირაათ ბანკის თბილისის ფილიალი ',
        'კავკასიის განვითარების ბანკი - საქართველო',
        'იშ ბანკი საქართველო',
        'პროგრეს ბანკი',
        'კორ სტანდარტ ბანკი',
        'ხალიკ ბანკი საქართველო ',
        'პაშა ბანკი საქართველო',
        'ფინკა ბანკი საქართველო',
    ];

    /** @example 'თიბისი ბანკი' */
    public function bank(): string
    {
        return $this->randomizer->randomElement($this->banks);
    }

    /**
     * International Bank Account Number (IBAN)
     *
     * @param string $prefix      for generating bank account number of a specific bank
     * @param string $countryCode ISO 3166-1 alpha-2 country code
     * @param int    $length      total length without country code and 2 check digits
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     */
    public function bankAccountNumber($prefix = '', $countryCode = 'GE', $length = null): string
    {
        return $this->iban($countryCode, $prefix, $length);
    }
}
