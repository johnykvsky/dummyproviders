<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_AU;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    protected array $citySuffix = ['town', 'ton', 'land', 'ville', 'berg', 'burgh', 'borough', 'bury', 'view', 'port', 'mouth', 'stad', 'furt', 'chester', 'mouth', 'fort', 'haven', 'side', 'shire'];

    protected array $country = [
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territories', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe',
    ];

    protected array $cityFormats = [
        '{{cityPrefix}} {{firstName}}{{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
    ];

    protected array $streetNameFormats = [
        '{{firstName}} {{streetSuffix}}',
        '{{lastName}} {{streetSuffix}}',
    ];

    protected array $addressFormats = [
        "{{streetAddress}}\n{{city}}, {{stateAbbr}} {{postcode}}",
    ];

    protected array $cityPrefix = ['North', 'East', 'West', 'South', 'New', 'Lake', 'Port', 'St.'];

    protected array $buildingNumber = ['%##', '%#', '%'];

    protected array $buildingLetters = ['A', 'B', 'C', 'D'];

    protected array $streetSuffix = [
        'Access', 'Alley', 'Alleyway', 'Amble', 'Anchorage', 'Approach', 'Arcade', 'Artery', 'Avenue', 'Basin', 'Beach', 'Bend', 'Block', 'Boulevard', 'Brace', 'Brae', 'Break', 'Bridge', 'Broadway', 'Brow', 'Bypass', 'Byway', 'Causeway', 'Centre', 'Centreway', 'Chase', 'Circle', 'Circlet', 'Circuit', 'Circus', 'Close', 'Colonnade', 'Common', 'Concourse', 'Copse', 'Corner', 'Corso', 'Court', 'Courtyard', 'Cove', 'Crescent', 'Crest', 'Cross', 'Crossing', 'Crossroad', 'Crossway', 'Cruiseway', 'Cul-de-sac', 'Cutting', 'Dale', 'Dell', 'Deviation', 'Dip', 'Distributor', 'Drive', 'Driveway', 'Edge', 'Elbow', 'End', 'Entrance', 'Esplanade', 'Estate', 'Expressway', 'Extension', 'Fairway', 'Fire Track', 'Firetrail', 'Flat', 'Follow', 'Footway', 'Foreshore', 'Formation', 'Freeway', 'Front', 'Frontage', 'Gap', 'Garden', 'Gardens', 'Gate', 'Gates', 'Glade', 'Glen', 'Grange', 'Green', 'Ground', 'Grove', 'Gully', 'Heights', 'Highroad', 'Highway', 'Hill', 'Interchange', 'Intersection', 'Junction', 'Key', 'Landing', 'Lane', 'Laneway', 'Lees', 'Line', 'Link', 'Little', 'Lookout', 'Loop', 'Lower', 'Mall', 'Meander', 'Mew', 'Mews', 'Motorway', 'Mount', 'Nook', 'Outlook', 'Parade', 'Park', 'Parklands', 'Parkway', 'Part', 'Pass', 'Path', 'Pathway', 'Piazza', 'Place', 'Plateau', 'Plaza', 'Pocket', 'Point', 'Port', 'Promenade', 'Quad', 'Quadrangle', 'Quadrant', 'Quay', 'Quays', 'Ramble', 'Ramp', 'Range', 'Reach', 'Reserve', 'Rest', 'Retreat', 'Ride', 'Ridge', 'Ridgeway', 'Right Of Way', 'Ring', 'Rise', 'River', 'Riverway', 'Riviera', 'Road', 'Roads', 'Roadside', 'Roadway', 'Ronde', 'Rosebowl', 'Rotary', 'Round', 'Route', 'Row', 'Rue', 'Run', 'Service Way', 'Siding', 'Slope', 'Sound', 'Spur', 'Square', 'Stairs', 'State Highway', 'Steps', 'Strand', 'Street', 'Strip', 'Subway', 'Tarn', 'Terrace', 'Thoroughfare', 'Tollway', 'Top', 'Tor', 'Towers', 'Track', 'Trail', 'Trailer', 'Triangle', 'Trunkway', 'Turn', 'Underpass', 'Upper', 'Vale', 'Viaduct', 'View', 'Villas', 'Vista', 'Wade', 'Walk', 'Walkway', 'Way', 'Wynd',
    ];

    protected array $postcode = [
        // as per https://en.wikipedia.org/wiki/Postcodes_in_Australia
        // NSW
        '1###',
        '20##', '21##', '22##', '23##', '24##', '25##',
        '2619', '262#', '263#', '264#', '265#', '266#', '267#', '268#', '269#', '27##', '28##',
        '292#', '293#', '294#', '295#', '296#', '297#', '298#', '299#',
        // ACT
        '02##',
        '260#', '261#',
        '290#', '291#', '2920',
        // VIC
        '3###',
        '8###',
        // QLD
        '4###',
        '9###',
        // SA
        '5###',
        // WA
        '6###',
        // TAS
        '7###',
        // NT
        '08##',
        '09##',
    ];

    protected array $state = [
        'Australian Capital Territory', 'New South Wales', 'Northern Territory', 'Queensland', 'South Australia', 'Tasmania', 'Victoria', 'Western Australia',
    ];

    protected array $stateAbbr = [
        'ACT', 'NSW', 'NT', 'QLD', 'SA', 'TAS', 'VIC', 'WA',
    ];

    protected array $streetAddressFormats = [
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}}{{buildingLetter}} {{streetName}}',
        '{{secondaryAddress}} {{buildingNumber}} {{streetName}}',
    ];

    protected array $secondaryAddressFormats = [
        'Apt. ###',
        'Flat ##',
        'Suite ###',
        'Unit ##',
        'Level #',
        '### /',
        '## /',
        '# /',
    ];

    /**
     * Returns a sane building letter
     *
     * @example B
     */
    public function buildingLetter()
    {
        return $this->replacer->toUpper($this->randomizer->randomElement($this->buildingLetters));
    }

    /**
     * Returns a sane city prefix
     *
     * @example West
     */
    public function cityPrefix(): string
    {
        return $this->randomizer->randomElement($this->cityPrefix);
    }

    /**
     * Returns a sane street suffix
     *
     * @example Beach
     */
    public function streetSuffix(): string
    {
        return $this->randomizer->randomElement($this->streetSuffix);
    }

    /**
     * Returns a sane state
     *
     * @example New South Wales
     */
    public function state(): string
    {
        return $this->randomizer->randomElement($this->state);
    }

    /** @example 'Appt. 350' */
    public function secondaryAddress(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->secondaryAddressFormats));
    }

    /** @example 'CA' */
    public function stateAbbr(): string
    {
        return $this->randomizer->randomElement($this->stateAbbr);
    }
}
