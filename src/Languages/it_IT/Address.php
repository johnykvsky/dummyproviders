<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\it_IT;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    protected array $cityPrefix = ['San', 'Borgo', 'Sesto', 'Quarto', 'Settimo'];
    protected array $citySuffix = ['a mare', 'lido', 'ligure', 'del friuli', 'salentino', 'calabro', 'veneto', 'nell\'emilia', 'umbro', 'laziale', 'terme', 'sardo'];
    protected array $buildingNumber = ['%##', '%#', '%'];
    protected array $streetSuffix = [
        'Piazza', 'Strada', 'Via', 'Borgo', 'Contrada', 'Rotonda', 'Incrocio', 'Viale', 'Corso', 'Vicolo', 'Piazzale', 'Lungomare', 'Riva', 'Salita', 'Discesa', 'Calle', 'Galleria',
    ];
    protected array $postcode = ['#####'];
    protected array $state = [
        'Agrigento', 'Alessandria', 'Ancona', 'Aosta', 'Arezzo', 'Ascoli Piceno', 'Asti', 'Avellino', 'Bari', 'Barletta-Andria-Trani', 'Belluno', 'Benevento', 'Bergamo', 'Biella', 'Bologna', 'Bolzano', 'Brescia', 'Brindisi', 'Cagliari', 'Caltanissetta', 'Campobasso', 'Carbonia-Iglesias', 'Caserta', 'Catania', 'Catanzaro', 'Chieti', 'Como', 'Cosenza', 'Cremona', 'Crotone', 'Cuneo', 'Enna', 'Fermo', 'Ferrara', 'Firenze', 'Foggia', 'Forlì-Cesena', 'Frosinone', 'Genova', 'Gorizia', 'Grosseto', 'Imperia', 'Isernia', 'La Spezia', 'L\'Aquila', 'Latina', 'Lecce', 'Lecco', 'Livorno', 'Lodi', 'Lucca', 'Macerata', 'Mantova', 'Massa-Carrara', 'Matera', 'Messina', 'Milano', 'Modena', 'Monza e della Brianza', 'Napoli', 'Novara', 'Nuoro', 'Olbia-Tempio', 'Oristano', 'Padova', 'Palermo', 'Parma', 'Pavia', 'Perugia', 'Pesaro e Urbino', 'Pescara', 'Piacenza', 'Pisa', 'Pistoia', 'Pordenone', 'Potenza', 'Prato', 'Ragusa', 'Ravenna', 'Reggio Calabria', 'Reggio Emilia', 'Rieti', 'Rimini', 'Roma', 'Rovigo', 'Salerno', 'Medio Campidano', 'Sassari', 'Savona', 'Siena', 'Siracusa', 'Sondrio', 'Taranto', 'Teramo', 'Terni', 'Torino', 'Ogliastra', 'Trapani', 'Trento', 'Treviso', 'Trieste', 'Udine', 'Varese', 'Venezia', 'Verbano-Cusio-Ossola', 'Vercelli', 'Verona', 'Vibo Valentia', 'Vicenza', 'Viterbo',
    ];
    protected array $stateAbbr = [
        'AG', 'AL', 'AN', 'AO', 'AR', 'AP', 'AT', 'AV', 'BA', 'BT', 'BL', 'BN', 'BG', 'BI', 'BO', 'BZ', 'BS', 'BR', 'CA', 'CL', 'CB', 'CI', 'CE', 'CT', 'CZ', 'CH', 'CO', 'CS', 'CR', 'KR', 'CN', 'EN', 'FM', 'FE', 'FI', 'FG', 'FC', 'FR', 'GE', 'GO', 'GR', 'IM', 'IS', 'SP', 'AQ', 'LT', 'LE', 'LC', 'LI', 'LO', 'LU', 'MC', 'MN', 'MS', 'MT', 'ME', 'MI', 'MO', 'MB', 'NA', 'NO', 'NU', 'OT', 'OR', 'PD', 'PA', 'PR', 'PV', 'PG', 'PU', 'PE', 'PC', 'PI', 'PT', 'PN', 'PZ', 'PO', 'RG', 'RA', 'RC', 'RE', 'RI', 'RN', 'RM', 'RO', 'SA', 'VS', 'SS', 'SV', 'SI', 'SR', 'SO', 'TA', 'TE', 'TR', 'TO', 'OG', 'TP', 'TN', 'TV', 'TS', 'UD', 'VA', 'VE', 'VB', 'VC', 'VR', 'VV', 'VI', 'VT',
    ];
    protected array $country = [
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antartide (territori a sud del 60° parallelo)', 'Antigua e Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Bielorussia', 'Belgio', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia e Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brasile', 'Territorio dell\'arcipelago indiano', 'Isole Vergini Britanniche', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambogia', 'Cameroon', 'Canada', 'Capo Verde', 'Isole Cayman', 'Repubblica Centrale Africana', 'Chad', 'Cile', 'Cina', 'Isola di Pasqua', 'Isola di Cocos (Keeling)', 'Colombia', 'Comoros', 'Congo', 'Isole Cook', 'Costa Rica', 'Costa d\'Avorio', 'Croazia', 'Cuba', 'Cipro', 'Repubblica Ceca',
        'Danimarca', 'Gibuti', 'Repubblica Dominicana',
        'Equador', 'Egitto', 'El Salvador', 'Guinea Equatoriale', 'Eritrea', 'Estonia', 'Etiopia',
        'Isole Faroe', 'Isole Falkland (Malvinas)', 'Fiji', 'Finlandia', 'Francia', 'Guyana Francese', 'Polinesia Francese', 'Territori Francesi del sud',
        'Gabon', 'Gambia', 'Georgia', 'Germania', 'Ghana', 'Gibilterra', 'Grecia', 'Groenlandia', 'Grenada', 'Guadalupa', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Città del Vaticano', 'Honduras', 'Hong Kong', 'Ungheria',
        'Islanda', 'India', 'Indonesia', 'Iran', 'Iraq', 'Irlanda', 'Isola di Man', 'Israele', 'Italia',
        'Giamaica', 'Giappone', 'Jersey', 'Giordania',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Kuwait', 'Republicca Kirgiza',
        'Repubblica del Laos', 'Latvia', 'Libano', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lituania', 'Lussemburgo',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malesia', 'Maldive', 'Mali', 'Malta', 'Isole Marshall', 'Martinica', 'Mauritania', 'Mauritius', 'Mayotte', 'Messico', 'Micronesia', 'Moldova', 'Principato di Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Marocco', 'Mozambico', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Antille Olandesi', 'Olanda', 'Nuova Caledonia', 'Nuova Zelanda', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Isole Norfolk', 'Northern Mariana Islands', 'Norvegia',
        'Oman',
        'Pakistan', 'Palau', 'Palestina', 'Panama', 'Papua Nuova Guinea', 'Paraguay', 'Peru', 'Filippine', 'Pitcairn Islands', 'Polonia', 'Portogallo', 'Porto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russia', 'Rwanda',
        'San Bartolomeo', 'Sant\'Elena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Arabia Saudita', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovenia', 'Isole Solomon', 'Somalia', 'Sud Africa', 'Georgia del sud e South Sandwich Islands', 'Spagna', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Svezia', 'Svizzera', 'Siria',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Tailandia', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad e Tobago', 'Tunisia', 'Turchia', 'Turkmenistan', 'Isole di Turks and Caicos', 'Tuvalu',
        'Uganda', 'Ucraina', 'Emirati Arabi Uniti', 'Regno Unito', 'Stati Uniti d\'America', 'United States Minor Outlying Islands', 'Isole Vergini Statunitensi', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe',
    ];
    protected array $cityFormats = [
        '{{cityPrefix}} {{firstName}} {{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
    ];
    protected array $streetNameFormats = [
        '{{streetSuffix}} {{firstName}}',
        '{{streetSuffix}} {{lastName}}',
    ];
    protected array $streetAddressFormats = [
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}} {{secondaryAddress}}',
    ];
    protected array $addressFormats = [
        "{{streetAddress}}\n{{city}}, {{postcode}} {{state}} ({{stateAbbr}})",
    ];
    protected array $secondaryAddressFormats = ['Appartamento ##', 'Piano #'];

    /** @example 'East' */
    public function cityPrefix(): string
    {
        return $this->randomizer->randomElement($this->cityPrefix);
    }

    /** @example 'Appt. 350' */
    public function secondaryAddress(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->secondaryAddressFormats));
    }

    /** @example 'California' */
    public function state(): string
    {
        return $this->randomizer->randomElement($this->state);
    }

    /** @example 'CA' */
    public function stateAbbr(): string
    {
        return $this->randomizer->randomElement($this->stateAbbr);
    }
}
