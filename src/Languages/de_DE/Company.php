<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\de_DE;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    ];

    /** @see http://www.personalseite.de/information/titel.htm */
    protected array $jobTitleFormat = [
        'Abteilungsdirektor', 'Arbeitsdirektor', 'Aufsichtsrat', 'Beirat', 'Bereichsleiter', 'Betriebsleiter', 'Finanzvorstand', 'Geschäftsführender Gesellschafter', 'Geschäftsführer', 'Gesellschafter',
        'Handlungsbevollmächtigter', 'Kaufmännischer Vorstand', 'Leiter Rechtsabteilung', 'Mitglied des Aufsichtsrats', 'Personalleiter', 'Prokurist', 'Stellvertretender Vorsitzender des Vorstandes',
        'Vorsitzender der Geschäftsführung', 'Vorsitzender des Aufsichtsrats', 'Vorsitzender des Vorstandes', 'Vorstand Personal', 'Vorstand Technik', 'Vorstand Vertrieb', 'Vorstandsmitglied', 'Werksleiter',
    ];

    protected array $companySuffix = ['e.G.', 'e.V.', 'GbR', 'GbR', 'OHG mbH', 'GmbH & Co. OHG', 'AG & Co. OHG', 'GmbH', 'GmbH', 'GmbH', 'GmbH', 'AG', 'AG', 'AG', 'AG', 'KG', 'KG', 'KG', 'GmbH & Co. KG', 'GmbH & Co. KG', 'AG & Co. KG', 'Stiftung & Co. KG', 'KGaA', 'GmbH & Co. KGaA', 'AG & Co. KGaA', 'Stiftung & Co. KGaA'];

    /** @var string[] */
    protected array $industries = [
        'Technologie', 'Gesundheitswesen', 'Finanzdienstleistungen', 'Produktion',
        'Einzelhandel', 'Telekommunikation', 'Bildung', 'Energie',
        'Transport & Logistik', 'Medien & Unterhaltung', 'Immobilien', 'Landwirtschaft',
        'Gastgewerbe', 'Bauwesen', 'Beratung', 'Automobilindustrie',
    ];

    /**
     * German Value Added Tax Identification Number (Umsatzsteuer-Identifikationsnummer / USt-IdNr)
     *
     * @see https://de.wikipedia.org/wiki/Umsatzsteuer-Identifikationsnummer#Deutschland
     */
    public function ustIdNr(): string
    {
        $digits = [$this->randomizer->getInt(1, 9)];
        for ($i = 1; $i < 8; ++$i) {
            $digits[] = $this->randomizer->getInt(0, 9);
        }

        $sum = 0;
        for ($i = 0; $i < 8; ++$i) {
            $sum = ($digits[$i] + $sum) % 10;
            if ($sum === 0) {
                $sum = 10;
            }

            $sum = ($sum * 2) % 11;
        }

        $check = 11 - $sum;
        $checkDigit = $check === 10 ? 0 : $check;

        return 'DE' . implode('', $digits) . $checkDigit;
    }

    public function vatId(): string
    {
        return $this->ustIdNr();
    }

    /**
     * German Commercial Register Number (Handelsregisternummer)
     *
     * @see https://de.wikipedia.org/wiki/Handelsregister_(Deutschland)
     */
    public function handelsregisternummer(): string
    {
        $type = $this->randomizer->randomElement(['HRA', 'HRB']);
        $number = $this->randomizer->getInt(100, 99999);

        return sprintf('%s %d', $type, $number);
    }
}
