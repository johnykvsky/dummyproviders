<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ckb_IQ;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    /** @var string[] */
    protected array $cityPrefix = ['شاری'];

    /** @var string[] */
    protected array $streetPrefix = ['شەقامی'];

    /** @var string[] */
    protected array $buildingNumberPrefix = ['خانووی ژمارە', 'بینای ژمارە'];

    /** @var string[] */
    protected array $postcodePrefix = ['کۆدی پۆستی'];

    /** @var string[] */
    protected array $streetMeters = ['۳۰', '۴۰', '۶۰', '۱۰۰', '۱۲۰', '۱۵۰'];

    /** @var string[] */
    protected array $buildingNumber = ['##'];

    /** @var string[] */
    protected array $cityName = [
        'هەولێر', 'سلێمانی', 'دهۆک', 'هەڵەبجە', 'کەرکووک',
        'زاخۆ', 'ئاکرێ', 'ئامێدی', 'کۆیە', 'ڕانیە', 'قەڵادزێ',
        'چەمچەماڵ', 'کفری', 'کەلار', 'خانەقین', 'ڕەواندز',
        'شەقڵاوە', 'سۆران', 'شنگال', 'بامەرنێ', 'سێمێل',
        'پێنجوێن', 'دۆکان',
    ];

    /** @var string[] */
    protected array $cityFormats = [
        '{{cityName}}',
        '{{cityPrefix}} {{cityName}}',
    ];

    /** @var string[] */
    protected array $streetNameFormats = [
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{streetMeters}} مەتری',
        'گەڕەکی {{lastName}}',
    ];

    /** @var string[] */
    protected array $streetAddressFormats = [
        '{{streetName}}، {{buildingNumberPrefix}} {{buildingNumber}}',
    ];

    /** @var string[] */
    protected array $addressFormats = [
        '{{city}}، {{streetAddress}}',
        '{{city}}، {{streetAddress}}، {{postcodePrefix}} {{postcode}}',
    ];

    /** @var string[] */
    protected array $postcode = ['#####'];

    /** @var string[] */
    protected array $country = ['عێراق', 'هەرێمی کوردستان'];

    /** @example 'شاری' */
    public function cityPrefix(): string
    {
        return $this->randomizer->randomElement($this->cityPrefix);
    }

    /** @example 'هەولێر' */
    public function cityName(): string
    {
        return $this->randomizer->randomElement($this->cityName);
    }

    /** @example 'شەقامی' */
    public function streetPrefix(): string
    {
        return $this->randomizer->randomElement($this->streetPrefix);
    }

    /** @example '۱۰۰' */
    public function streetMeters(): string
    {
        return $this->randomizer->randomElement($this->streetMeters);
    }

    /** @example 'خانووی ژمارە' */
    public function buildingNumberPrefix(): string
    {
        return $this->randomizer->randomElement($this->buildingNumberPrefix);
    }

    /** @example 'کۆدی پۆستی' */
    public function postcodePrefix(): string
    {
        return $this->randomizer->randomElement($this->postcodePrefix);
    }
}
