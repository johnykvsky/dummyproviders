<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\kk_KZ;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    protected array $citySuffix = ['қаласы'];

    protected array $regionSuffix = ['облысы'];
    protected array $streetSuffix = [
        'көшесі', 'даңғылы',
    ];

    protected array $buildingNumber = ['%##'];
    protected array $postcode = ['0#####'];
    // TODO list all country names in the world
    protected array $country = [
        'Қазақстан',
        'Ресей',
    ];

    protected array $region = [
        'Алматы',
        'Ақтау',
        'Ақтөбе',
        'Астана',
        'Атырау',
        'Байқоңыр',
        'Қарағанды',
        'Көкшетау',
        'Қостанай',
        'Қызылорда',
        'Маңғыстау',
        'Павлодар',
        'Петропавл',
        'Талдықорған',
        'Тараз',
        'Орал',
        'Өскемен',
        'Шымкент',
    ];

    protected array $city = [
        'Алматы',
        'Ақтау',
        'Ақтөбе',
        'Астана',
        'Атырау',
        'Байқоңыр',
        'Қарағанды',
        'Көкшетау',
        'Қостанай',
        'Қызылорда',
        'Маңғыстау',
        'Павлодар',
        'Петропавл',
        'Талдықорған',
        'Тараз',
        'Орал',
        'Өскемен',
        'Шымкент',
    ];

    protected array $street = [
        'Абай',
        'Гоголь',
        'Кенесары',
        'Бейбітшілік',
        'Достық',
        'Бұқар жырау',
    ];

    protected array $addressFormats = [
        '{{postcode}}, {{region}} {{regionSuffix}}, {{city}} {{citySuffix}}, {{street}} {{streetSuffix}}, {{buildingNumber}}',
    ];

    protected array $streetAddressFormats = [
        '{{street}} {{streetSuffix}}, {{buildingNumber}}',
    ];

    public function buildingNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->buildingNumber));
    }

    public function regionSuffix()
    {
        return $this->randomizer->randomElement($this->regionSuffix);
    }

    public function region(): string
    {
        return $this->randomizer->randomElement($this->region);
    }

    public function city(): string
    {
        return $this->randomizer->randomElement($this->city);
    }

    public function street()
    {
        return $this->randomizer->randomElement($this->street);
    }

}
