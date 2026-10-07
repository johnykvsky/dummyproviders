<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\sv_SE;

use DummyGenerator\Core\Company as BaseCompany;
use DummyGenerator\Definitions\Calculator\LuhnCalculatorInterface;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\GeneratorInterface;

class Company extends BaseCompany
{
    public function __construct(
        RandomizerInterface $randomizer,
        GeneratorInterface $generator,
        protected LuhnCalculatorInterface $luhnCalculator,
    ) {
        parent::__construct($randomizer, $generator);
    }

    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{firstName}} {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}}',
        '{{lastName}} och {{lastName}}',
        '{{lastName}} och {{lastName}} {{companySuffix}}',
    ];

    protected array $companySuffix = ['AB', 'HB'];

    protected array $jobTitles = ['Automationsingenjör', 'Bagare', 'Digital Designer', 'Ekonom', 'Ekonomichef', 'Elektronikingenjör', 'Försäljare', 'Försäljningschef', 'Innovationsdirektör', 'Investeringsdirektör', 'Journalist', 'Kock', 'Kulturstrateg', 'Läkare', 'Lokförare', 'Mäklare', 'Programmerare', 'Projektledare', 'Sjuksköterska', 'Utvecklare', 'UX Designer', 'Webbutvecklare'];

    public function jobTitle(): string
    {
        return $this->randomizer->randomElement($this->jobTitles);
    }

    /**
     * Swedish Organisation Number (Organisationsnummer)
     *
     * 10 digits number with Luhn checksum
     *
     * @see https://sv.wikipedia.org/wiki/Organisationsnummer
     */
    public function organisationsnummer(bool $formatted = true): string
    {
        $first = $this->randomizer->randomElement([2, 5, 7, 8, 9]);
        $digits = [(string) $first];
        $digits[] = (string) $this->generator->randomDigit();
        $digits[] = (string) $this->randomizer->getInt(2, 9);
        for ($i = 3; $i < 9; ++$i) {
            $digits[] = (string) $this->generator->randomDigit();
        }

        $base = implode('', $digits);
        $check = $this->luhnCalculator->computeCheckDigit($base);
        $num = $base . $check;

        if ($formatted) {
            return substr($num, 0, 6) . '-' . substr($num, 6, 4);
        }

        return $num;
    }

    public function organisationNumber(bool $formatted = true): string
    {
        return $this->organisationsnummer($formatted);
    }

    /**
     * Swedish VAT number (Momsnummer)
     */
    public function vat(): string
    {
        return 'SE' . $this->organisationsnummer(false) . '01';
    }

    public function moms(): string
    {
        return $this->vat();
    }
}
