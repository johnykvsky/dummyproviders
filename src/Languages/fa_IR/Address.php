<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fa_IR;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    protected array $cityPrefix = ['استان'];
    protected array $streetPrefix = ['خیابان'];
    protected array $buildingNamePrefix = ['ساختمان'];
    protected array $buildingNumberPrefix = ['پلاک', 'قطعه'];
    protected array $postcodePrefix = ['کد پستی'];

    protected array $cityName = [
        'آذربایجان شرقی', 'آذربایجان غربی', 'اردبیل', 'اصفهان', 'البرز', 'ایلام', 'بوشهر',
        'تهران', 'خراسان جنوبی', 'خراسان رضوی', 'خراسان شمالی', 'خوزستان', 'زنجان', 'سمنان',
        'سیستان و بلوچستان', 'فارس', 'قزوین', 'قم', 'لرستان', 'مازندران', 'مرکزی', 'هرمزگان',
        'همدان', 'چهارمحال و بختیاری', 'کردستان', 'کرمان', 'کرمانشاه', 'کهگیلویه و بویراحمد',
        'گلستان', 'گیلان', 'یزد',
    ];

    protected array $cityFormats = [
        '{{cityName}}',
        '{{cityPrefix}} {{cityName}}',
    ];
    protected array $streetNameFormats = [
        '{{streetPrefix}} {{lastName}}',
    ];
    protected array $streetAddressFormats = [
        '{{streetName}} {{building}}',
    ];
    protected array $addressFormats = [
        '{{city}} {{streetAddress}} {{postcodePrefix}} {{postcode}}',
        '{{city}} {{streetAddress}}',
    ];
    protected array $buildingFormat = [
        '{{buildingNamePrefix}} {{firstName}} {{buildingNumberPrefix}} {{buildingNumber}}',
        '{{buildingNamePrefix}} {{firstName}}',
    ];

    protected array $postcode = ['##########'];
    protected array $country = ['ایران'];

    /**
     * @example 'استان'
     */
    public function cityPrefix(): string
    {
        return $this->randomizer->randomElement($this->cityPrefix);
    }

    /**
     * @example 'زنجان'
     */
    public function cityName(): string
    {
        return $this->randomizer->randomElement($this->cityName);
    }

    /**
     * @example 'خیابان'
     */
    public function streetPrefix(): string
    {
        return $this->randomizer->randomElement($this->streetPrefix);
    }

    /**
     * @example 'ساختمان'
     */
    public function buildingNamePrefix()
    {
        return $this->randomizer->randomElement($this->buildingNamePrefix);
    }

    /**
     * @example 'پلاک'
     */
    public function buildingNumberPrefix()
    {
        return $this->randomizer->randomElement($this->buildingNumberPrefix);
    }

    /**
     * @example 'ساختمان آفتاب پلاک 24'
     */
    public function building()
    {
        $format = $this->randomizer->randomElement($this->buildingFormat);

        return $this->generator->parse($format);
    }

    /**
     * @example 'کد پستی'
     */
    public function postcodePrefix()
    {
        return $this->randomizer->randomElement($this->postcodePrefix);
    }

}
