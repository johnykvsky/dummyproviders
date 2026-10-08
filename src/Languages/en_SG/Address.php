<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_SG;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    // http://en.wikipedia.org/wiki/Singapore_Post#Address_format
    protected array $streetNumber = ['##', '###'];

    // http://en.wikipedia.org/wiki/Singapore_Post#Address_format
    protected array $blockNumber = [
        'Blk ##',
        'Blk ###',
        'Blk ###A',
        'Blk ###B',
        'Blk ###C',
        'Blk ###D',
        'Blk ###E',
        'Blk ###F',
        'Blk ###G',
        'Blk ###H',
    ];

    // http://www.streetdirectory.com/asia_travel/travel/street/alphabet2/
    protected array $streetSuffix = [
        'Alley', 'Avenue',
        'Bridge',
        'Crescent',
        'Drive',
        'Grove',
        'Highway', 'Hill',
        'Lane', 'Link',
        'Park', 'Place',
        'Quay',
        'Road',
        'Walk', 'Way',
    ];

    // http://www.streetdirectory.com/asia_travel/travel/street/alphabet2/
    protected array $streetPrefix = [
        'Jalan',
    ];

    // http://www.streetdirectory.com/asia_travel/travel/street/alphabet2/
    // http://remembersingapore.org/2011/04/04/old-names-of-places/
    protected array $streetName = [
        'Adam', 'Airport', 'Alexandra', 'Aljunied', 'Ampang', 'Ann Siang', 'Angus', 'Anson', 'Armenian',
        'Balmoral', 'Battery', 'Bencoolen',
        'Collyer', 'Clarke', 'Church', 'Cecil', 'Cross', 'Chulia', 'Cheang Hong Lim', 'Chin Swee', 'Choon Guan',
        'Devonshire', 'Dublin', 'Duxton', 'D\'Almeida',
        'East Coast', 'Eden', 'Edgware', 'Eunos',
        'Fifth', 'First', 'Funan', 'Fullerton',
        'George', 'Glasgow', 'Grange',
        'Havelock', 'High', 'Hylam',
        'International Business', 'International', 'Irving',
        'Jubilee',
        'Kensington Park', 'Kitchener', 'Knights',
        'Lancaster', 'Leicester', 'Lengkok Bahru', 'Lim Teck Kim',
        'Malay', 'Market', 'Middle', 'Malabar', 'Merchant', 'Mohammed Sultan',
        'Napier', 'Nathan', 'Newton',
        'Ocean', 'One Tree', 'Orchard', 'Outram', 'Ophir',
        'Pekin', 'Peng Siang', 'Prince Edward', 'Palmer',
        'Quality', 'Queen',
        'Raffles', 'Robinson', 'Rochor', 'Regent', 'Ridley', 'River Valley',
        'Sixth', 'Somerset', 'Stanley', 'Stamford', 'Shenton', 'Sultan',
        'Telok Ayer', 'Temple', 'Thomson', 'Unity', 'Victoria', 'Xilin', 'York', 'Zion',
    ];

    protected array $streetAddressFormats = [
        '{{streetPrefix}} {{streetName}}',
        '{{streetName}} {{streetSuffix}}',
    ];

    protected array $floorNumber = [
        '##', '0#',
    ];

    protected array $apartmentNumber = [
        '##', '###',
    ];

    // http://en.wikipedia.org/wiki/Singapore_Post#Address_format
    protected array $addressFormats = [
        "{{streetNumber}} {{streetAddress}}\n{{townName}} {{postcode}}",
        "{{blockNumber}} {{streetAddress}}\n{{floorNumber}} {{apartmentNumber}}\n{{townName}} {{postcode}}",
    ];

    protected string $townName = 'SINGAPORE';

    protected array $postcode = ['######'];

    protected array $country = [
        'SINGAPORE',
    ];

    public function streetPrefix(): string
    {
        return $this->randomizer->randomElement($this->streetPrefix);
    }

    public function streetNumber()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->streetNumber));
    }

    public function blockNumber()
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->blockNumber));
    }

    public function floorNumber()
    {
        return $this->randomizer->randomElement($this->floorNumber);
    }

    public function apartmentNumber()
    {
        return $this->randomizer->randomElement($this->apartmentNumber);
    }

    public function townName()
    {
        return $this->townName;
    }
}
