<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\kk_KZ;

use DummyGenerator\Core\Company as BaseCompany;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

class Company extends BaseCompany
{
    public function __construct(
        RandomizerInterface $randomizer,
        GeneratorInterface $generator,
        protected ReplacerInterface $replacer,
    ) {
        parent::__construct($randomizer, $generator);
    }

    protected array $companyNameFormats = [
        '{{companyPrefix}} {{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
    ];

    protected array $companyPrefixes = [
        'АҚ', 'ЖШС', 'ЖАҚ',
    ];

    protected array $companyNameSuffixes = [
        'Құрылыс', 'Машина', 'Бұзу', '-М', 'Лизинг', 'Страх', 'Ком', 'Телеком',
    ];

    protected array $companyElements = [
        'Қазақ', 'Кітап', 'Цемент', 'Лифт', 'Креп', 'Авто', 'Теле', 'Транс', 'Алмаз', 'Метиз',
        'Мотор', 'Қаз', 'Тех', 'Сантех', 'Алматы', 'Астана', 'Электро',
    ];

    /**
     * @example 'ЖШС АлматыТелеком'
     */
    public function company(): string
    {
        $format = $this->randomizer->randomElement($this->companyNameFormats);

        return $this->generator->parse($format);
    }

    public function companyPrefix(): string
    {
        return $this->randomizer->randomElement($this->companyPrefixes);
    }

    public function companyNameElement()
    {
        return $this->randomizer->randomElement($this->companyElements);
    }

    public function companyNameSuffix()
    {
        return $this->randomizer->randomElement($this->companyNameSuffixes);
    }

    /**
     * National Business Identification Numbers
     *
     * @see   http://egov.kz/wps/portal/Content?contentPath=%2Fegovcontent%2Fbus_business%2Ffor_businessmen%2Farticle%2Fbusiness_identification_number&lang=en
     *
     * @return string 12 digits, like 150140000019
     */
    public function businessIdentificationNumber(?\DateTimeInterface $registrationDate = null)
    {
        if (!$registrationDate) {
            $registrationDate = $this->generator->dateTimeThisYear();
        }

        $dateAsString = $registrationDate->format('ym');
        $legalEntityType = (string) $this->randomizer->getInt(4, 6);
        $legalEntityAdditionalType = (string) $this->randomizer->getInt(0, 3);
        $randomDigits = (string) $this->replacer->numerify('######');

        return $dateAsString . $legalEntityType . $legalEntityAdditionalType . $randomDigits;
    }
}
