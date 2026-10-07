<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\de_CH;

use DummyGenerator\Core\Address as BaseAddress;
use DummyGenerator\Provider\Regexify;

class Address extends BaseAddress
{
    protected array $buildingNumber = ['%##', '%#', '%', '##[abc]', '#[abc]'];

    protected array $streetSuffixLong = [
        'Gasse', 'Platz', 'Ring', 'Strasse', 'Weg', 'Allee',
    ];
    protected array $streetSuffixShort = [
        'gasse', 'platz', 'ring', 'strasse', 'str.', 'weg', 'allee',
    ];

    protected array $postcode = ['####'];

    /**
     * @see https://de.wikipedia.org/wiki/Liste_der_St%C3%A4dte_in_der_Schweiz
     */
    protected array $cityNames = [
        'Aarau', 'Aarberg', 'Aarburg', 'Adliswil', 'Aesch', 'Affoltern am Albis', 'Agno', 'Aigle', 'Allschwil', 'Altdorf', 'Altstätten', 'Amriswil', 'Appenzell', 'Arbon', 'Arth', 'Ascona', 'Aubonne', 'Avenches',
        'Baar', 'Bad Zurzach', 'Baden', 'Basel', 'Bassersdorf', 'Bellinzona', 'Belp', 'Bern', 'Beromünster', 'Biasca', 'Biel/Bienne', 'Binningen', 'Birsfelden', 'Bischofszell', 'Boudry', 'Bourg-Saint-Pierre', 'Bremgarten', 'Brig-Glis', 'Brig', 'Brugg', 'Buchs', 'Bulle', 'Burgdorf', 'Bülach',
        'Carouge', 'Cham', 'Chur', 'Châtel-Saint-Denis', 'Chêne-Bougeries', 'Conthey', 'Coppet', 'Cossonay', 'Croglio', 'Cudrefin', 'Cully',
        'Davos', 'Delsberg', 'Diessenhofen', 'Dietikon', 'Dübendorf',
        'Ebikon', 'Echallens', 'Ecublens', 'Eglisau', 'Einsiedeln', 'Elgg', 'Emmen', 'Erlach', 'Estavayer-le-Lac',
        'Flawil', 'Frauenfeld', 'Freiburg', 'Freienbach', 'Fürstenau',
        'Genf', 'Gland', 'Glarus', 'Gordola', 'Gossau', 'Grandcour', 'Grandson', 'Greifensee', 'Grenchen', 'Greyerz', 'Grüningen',
        'Herisau', 'Hermance', 'Hinwil', 'Horgen', 'Horw', 'Huttwil',
        'Ilanz', 'Illnau-Effretikon', 'Ittigen',
        'Kaiserstuhl', 'Klingnau', 'Kloten', 'Kreuzlingen', 'Kriens', 'Köniz', 'Küsnacht',
        'La Chaux-de-Fonds', 'La Neuveville', 'La Sarraz', 'La Tour-de-Peilz', 'La Tour-de-Trême', 'Lachen', 'Lancy', 'Langenthal', 'Laufen', 'Laufenburg', 'Laupen', 'Lausanne', 'Le Grand-Saconnex', 'Le Landeron', 'Le Locle', 'Lenzburg', 'Les Clées', 'Leuk', 'Lichtensteig', 'Liestal', 'Locarno', 'Losone', 'Lugano', 'Lutry', 'Luzern', 'Lyss',
        'Maienfeld', 'Martigny', 'Meilen', 'Mellingen', 'Mendrisio', 'Meyrin', 'Monthey', 'Montreux', 'Morcote', 'Morges', 'Moudon', 'Moutier', 'Muri bei Bern', 'Murten', 'Muttenz', 'Männedorf', 'Möhlin', 'Münchenstein', 'Münsingen',
        'Neuenburg', 'Neuhausen am Rheinfall', 'Neunkirch', 'Nidau', 'Nyon',
        'Oberwil', 'Oftringen', 'Olten', 'Onex', 'Opfikon', 'Orbe', 'Orsières', 'Ostermundigen', 'Payerne', 'Pfäffikon', 'Plan-les-Ouates', 'Pratteln', 'Prilly', 'Pruntrut', 'Pully',
        'Rapperswil-Jona', 'Regensberg', 'Regensdorf', 'Reinach', 'Renens', 'Rheinau', 'Rheineck', 'Rheinfelden', 'Richterswil', 'Riehen', 'Risch', 'Riva San Vitale', 'Rolle', 'Romainmôtier', 'Romanshorn', 'Romont', 'Rorschach', 'Rue', 'Rüti',
        'Saillon', 'Saint-Maurice', 'Saint-Prex', 'Saint-Ursanne', 'Sala', 'Sargans', 'Sarnen', 'Schaffhausen', 'Schlieren', 'Schwyz', 'Sembrancher', 'Sempach', 'Siders', 'Sitten', 'Solothurn', 'Spiez', 'Splügen', 'Spreitenbach', 'St. Gallen', 'Stans', 'Steckborn', 'Steffisburg', 'Stein am Rhein', 'Stäfa', 'Sursee',
        'Thalwil', 'Thun', 'Thusis', 'Thônex',
        'Unterseen', 'Uster', 'Uznach', 'Uzwil',
        'Val-de-Travers NE', 'Valangin', 'Vernier', 'Versoix', 'Vevey', 'Veyrier GE', 'Villars-sur-Glâne', 'Villeneuve', 'Visp', 'Volketswil',
        'Waldenburg', 'Walenstadt', 'Wallisellen', 'Wangen an der Aare', 'Weinfelden', 'Werdenberg', 'Wettingen', 'Wetzikon', 'Wiedlisbach', 'Willisau', 'Wil', 'Winterthur', 'Wohlen', 'Worb', 'Wädenswil',
        'Yverdon-les-Bains',
        'Zofingen', 'Zollikon', 'Zug', 'Zürich',
    ];

    /**
     * @see https://de.wikipedia.org/wiki/Kanton_(Schweiz)
     */
    protected array $canton = [
        ['AG' => 'Aargau'],
        ['AI' => 'Appenzell Innerrhoden'],
        ['AR' => 'Appenzell Ausserrhoden'],
        ['BE' => 'Bern'],
        ['BL' => 'Basel-Landschaft'],
        ['BS' => 'Basel-Stadt'],
        ['FR' => 'Freiburg'],
        ['GE' => 'Genf'],
        ['GL' => 'Glarus'],
        ['GR' => 'Graubünden'],
        ['JU' => 'Jura'],
        ['LU' => 'Luzern'],
        ['NE' => 'Neuenburg'],
        ['NW' => 'Nidwalden'],
        ['OW' => 'Obwalden'],
        ['SG' => 'St. Gallen'],
        ['SH' => 'Schaffhausen'],
        ['SO' => 'Solothurn'],
        ['SZ' => 'Schwyz'],
        ['TG' => 'Thurgau'],
        ['TI' => 'Tessin'],
        ['UR' => 'Uri'],
        ['VD' => 'Waadt'],
        ['VS' => 'Wallis'],
        ['ZG' => 'Zug'],
        ['ZH' => 'Zürich'],
    ];

    protected array $country = [
        'Afghanistan', 'Alandinseln', 'Albanien', 'Algerien', 'Amerikanisch-Ozeanien', 'Amerikanisch-Samoa', 'Amerikanische Jungferninseln', 'Andorra', 'Angola', 'Anguilla', 'Antarktis', 'Antigua und Barbuda', 'Argentinien', 'Armenien', 'Aruba', 'Aserbaidschan', 'Australien', 'Ägypten', 'Äquatorialguinea', 'Äthiopien', 'Äusseres Ozeanien',
        'Bahamas', 'Bahrain', 'Bangladesch', 'Barbados', 'Belarus', 'Belgien', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivien', 'Bosnien und Herzegowina', 'Botsuana', 'Bouvetinsel', 'Brasilien', 'Britische Jungferninseln', 'Britisches Territorium im Indischen Ozean', 'Brunei Darussalam', 'Bulgarien', 'Burkina Faso', 'Burundi',
        'Chile', 'China', 'Cookinseln', 'Costa Rica', 'Côte d’Ivoire',
        'Demokratische Republik Kongo', 'Demokratische Volksrepublik Korea', 'Deutschland', 'Dominica', 'Dominikanische Republik', 'Dschibuti', 'Dänemark',
        'Ecuador', 'El Salvador', 'Eritrea', 'Estland', 'Europäische Union',
        'Falklandinseln', 'Fidschi', 'Finnland', 'Frankreich', 'Französisch-Guayana', 'Französisch-Polynesien', 'Französische Süd- und Antarktisgebiete', 'Färöer',
        'Gabun', 'Gambia', 'Georgien', 'Ghana', 'Gibraltar', 'Grenada', 'Griechenland', 'Grönland', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard- und McDonald-Inseln', 'Honduras',
        'Indien', 'Indonesien', 'Irak', 'Iran', 'Irland', 'Island', 'Isle of Man', 'Israel', 'Italien',
        'Jamaika', 'Japan', 'Jemen', 'Jersey', 'Jordanien',
        'Kaimaninseln', 'Kambodscha', 'Kamerun', 'Kanada', 'Kap Verde', 'Kasachstan', 'Katar', 'Kenia', 'Kirgisistan', 'Kiribati', 'Kokosinseln', 'Kolumbien', 'Komoren', 'Kongo', 'Kroatien', 'Kuba', 'Kuwait',
        'Laos', 'Lesotho', 'Lettland', 'Libanon', 'Liberia', 'Libyen', 'Liechtenstein', 'Litauen', 'Luxemburg',
        'Madagaskar', 'Malawi', 'Malaysia', 'Malediven', 'Mali', 'Malta', 'Marokko', 'Marshallinseln', 'Martinique', 'Mauretanien', 'Mauritius', 'Mayotte', 'Mazedonien', 'Mexiko', 'Mikronesien', 'Monaco', 'Mongolei', 'Montenegro', 'Montserrat', 'Mosambik', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Neukaledonien', 'Neuseeland', 'Nicaragua', 'Niederlande', 'Niederländische Antillen', 'Niger', 'Nigeria', 'Niue', 'Norfolkinsel', 'Norwegen', 'Nördliche Marianen',
        'Oman', 'Osttimor', 'Österreich',
        'Pakistan', 'Palau', 'Palästinensische Gebiete', 'Panama', 'Papua-Neuguinea', 'Paraguay', 'Peru', 'Philippinen', 'Pitcairn', 'Polen', 'Portugal', 'Puerto Rico',
        'Republik Korea', 'Republik Moldau', 'Ruanda', 'Rumänien', 'Russische Föderation', 'Réunion',
        'Salomonen', 'Sambia', 'Samoa', 'San Marino', 'Saudi-Arabien', 'Schweden', 'Schweiz', 'Senegal', 'Serbien', 'Serbien und Montenegro', 'Seychellen', 'Sierra Leone', 'Simbabwe', 'Singapur', 'Slowakei', 'Slowenien', 'Somalia', 'Sonderverwaltungszone Hongkong', 'Sonderverwaltungszone Macao', 'Spanien', 'Sri Lanka', 'St. Barthélemy', 'St. Helena', 'St. Kitts und Nevis', 'St. Lucia', 'St. Martin', 'St. Pierre und Miquelon', 'St. Vincent und die Grenadinen', 'Sudan', 'Suriname', 'Svalbard und Jan Mayen', 'Swasiland', 'Syrien', 'São Tomé und Príncipe', 'Südafrika', 'Südgeorgien und die Südlichen Sandwichinseln',
        'Tadschikistan', 'Taiwan', 'Tansania', 'Thailand', 'Togo', 'Tokelau', 'Tonga', 'Trinidad und Tobago', 'Tschad', 'Tschechische Republik', 'Tunesien', 'Turkmenistan', 'Turks- und Caicosinseln', 'Tuvalu', 'Türkei',
        'Uganda', 'Ukraine', 'Unbekannte oder ungültige Region', 'Ungarn', 'Uruguay', 'Usbekistan',
        'Vanuatu', 'Vatikanstadt', 'Venezuela', 'Vereinigte Arabische Emirate', 'Vereinigte Staaten', 'Vereinigtes Königreich', 'Vietnam',
        'Wallis und Futuna', 'Weihnachtsinsel', 'Westsahara',
        'Zentralafrikanische Republik', 'Zypern',
    ];

    protected array $cityFormats = [
        '{{cityName}}',
    ];

    protected array $streetNameFormats = [
        '{{lastName}}{{streetSuffixShort}}',
        '{{cityName}}{{streetSuffixShort}}',
        '{{firstName}}-{{lastName}}-{{streetSuffixLong}}',
    ];

    protected array $streetAddressFormats = [
        '{{streetName}} {{buildingNumber}}',
    ];
    protected array $addressFormats = [
        "{{streetAddress}}\n{{postcode}} {{city}}",
    ];

    /**
     * Returns a random city name.
     *
     * @example Luzern
     *
     * @return string
     */
    public function cityName(): string
    {
        return $this->randomizer->randomElement($this->cityNames);
    }

    /**
     * Returns a random street suffix.
     *
     * @example str.
     *
     * @return string
     */
    public function streetSuffixShort()
    {
        return $this->randomizer->randomElement($this->streetSuffixShort);
    }

    /**
     * Returns a random street suffix.
     *
     * @example Strasse
     *
     * @return string
     */
    public function streetSuffixLong()
    {
        return $this->randomizer->randomElement($this->streetSuffixLong);
    }

    /**
     * Returns a canton
     *
     * @example array('BE' => 'Bern')
     *
     * @return array
     */
    public function canton(): string
    {
        return $this->randomizer->randomElement($this->canton);
    }

    /**
     * Returns the abbreviation of a canton.
     *
     * @return string
     */
    public function cantonShort()
    {
        $canton = $this->canton();

        return key($canton);
    }

    /**
     * Returns the name of canton.
     *
     * @return string
     */
    public function cantonName()
    {
        $canton = $this->canton();

        return current($canton);
    }

    public function buildingNumber(): string
    {
        return Regexify::regexify($this->replacer->numerify($this->randomizer->randomElement($this->buildingNumber)));
    }

}
