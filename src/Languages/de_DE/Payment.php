<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\de_DE;

use DummyGenerator\Core\Payment as BasePayment;

class Payment extends BasePayment
{
    /**
     * International Bank Account Number (IBAN)
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     *
     * @param string $prefix      for generating bank account number of a specific bank
     * @param string $countryCode ISO 3166-1 alpha-2 country code
     * @param int    $length      total length without country code and 2 check digits
     *
     * @return string
     */
    public function bankAccountNumber($prefix = '', $countryCode = 'DE', $length = null): string
    {
        return $this->iban($countryCode, $prefix, $length);
    }

    /**
     * Sources:
     * The 19 largest German banks by total assets
     *
     * @see https://de.wikipedia.org/wiki/Liste_der_größten_Banken_in_Deutschland
     * The 20 largest co-operative banks by branch count
     * @see https://de.wikipedia.org/wiki/Liste_der_Genossenschaftsbanken_in_Deutschland
     * The 20 largest public savings banks by branch count
     * @see https://de.wikipedia.org/wiki/Liste_der_Sparkassen_in_Deutschland
     */
    protected array $banks = [
        'Bank 1 Saar', 'Bayerische Landesbank', 'BBBank', 'Berliner Sparkasse', 'Berliner Volksbank', 'Braunschweigische Landessparkasse',
        'Commerzbank',
        'DekaBank Deutsche Girozentrale', 'Deutsche Apotheker- und Ärztebank', 'Deutsche Bank', 'Deutsche Kreditbank', 'Deutsche Pfandbriefbank', 'Dortmunder Volksbank', 'DZ Bank',
        'Erzgebirgssparkasse',
        'Frankfurter Sparkasse', 'Frankfurter Volksbank',
        'Hamburger Sparkasse', 'Hannoversche Volksbank', 'HSGV', 'HSH Nordbank',
        'ING-DiBa',
        'KfW', 'Kreissparkasse Esslingen-Nürtingen', 'Kreissparkasse Heilbronn', 'Kreissparkasse Köln', 'Kreissparkasse Ludwigsburg', 'Kreissparkasse München Starnberg Ebersberg',
        'L-Bank', 'Landesbank Baden-Württemberg', 'Landesbank Hessen-Thüringen', 'Landessparkasse zu Oldenburg', 'Landwirtschaftliche Rentenbank',
        'Mittelbrandenburgische Sparkasse in Potsdam',
        'Nassauische Sparkasse', 'Norddeutsche Landesbank', 'NRW.Bank',
        'Ostsächsische Sparkasse Dresden',
        'Postbank',
        'Sparkasse Hannover', 'Sparkasse KölnBonn', 'Sparkasse Mainfranken Würzburg', 'Sparkasse Nürnberg', 'Sparkasse Pforzheim Calw', 'Stadtsparkasse München',
        'Unicredit Bank',
        'Vereinigte Volksbank', 'Volksbank, Hildesheim-Lehrte-Pattensen', 'Volksbank Alzey-Worms', 'Volksbank Braunschweig Wolfsburg', 'Volksbank Darmstadt - Südhessen', 'Volksbank Hohenlohe', 'Volksbank Kraichgau Wiesloch-Sinsheim', 'Volksbank Lüneburger Heide', 'Volksbank Mittelhessen', 'Volksbank Paderborn-Höxter-Detmold', 'Volksbank Raiffeisenbank Rosenheim-Chiemsee', 'Volksbank Stuttgart', 'VR Bank Main-Kinzig-Büdingen',
        'WGZ Bank',
    ];

    /**
     * @example 'Volksbank Stuttgart'
     */
    public function bank(): string
    {
        return $this->randomizer->randomElement($this->banks);
    }

}
