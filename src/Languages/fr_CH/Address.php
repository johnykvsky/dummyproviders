<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fr_CH;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    protected array $citySuffix = ['Ville', 'Bourg', '-les-Bains', '-sur-Mer', '-la-Forêt', 'boeuf', 'nec', 'dan'];

    protected array $country = [
        'Afghanistan', 'Afrique du sud', 'Albanie', 'Algérie', 'Allemagne', 'Andorre', 'Angola', 'Anguilla', 'Antarctique', 'Antigua et Barbuda', 'Antilles néerlandaises', 'Arabie saoudite', 'Argentine', 'Arménie', 'Aruba', 'Australie', 'Autriche', 'Azerbaïdjan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Belgique', 'Belize', 'Benin', 'Bermudes (Les)', 'Bhoutan', 'Biélorussie', 'Bolivie', 'Bosnie-Herzégovine', 'Botswana', 'Bouvet (Îles)', 'Brunei', 'Brésil', 'Bulgarie', 'Burkina Faso', 'Burundi', 'Cambodge', 'Cameroun', 'Canada', 'Cap Vert', 'Cayman (Îles)', 'Chili', 'Chine (Rép. pop.)', 'Christmas (Île)', 'Chypre', 'Cocos (Îles)', 'Colombie', 'Comores', 'Cook (Îles)', 'Corée du Nord', 'Corée, Sud', 'Costa Rica', 'Croatie', 'Cuba', 'Côte d\'Ivoire', 'Danemark', 'Djibouti', 'Dominique', 'Égypte', 'El Salvador', 'Émirats arabes unis', 'Équateur', 'Érythrée', 'Espagne', 'Estonie', 'États-Unis', 'Ethiopie', 'Falkland (Île)', 'Fidji (République des)', 'Finlande', 'France', 'Féroé (Îles)', 'Gabon',
        'Gambie', 'Ghana', 'Gibraltar', 'Grenade', 'Groenland', 'Grèce', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinée', 'Guinée Equatoriale', 'Guinée-Bissau', 'Guyane', 'Guyane française', 'Géorgie', 'Géorgie du Sud et Sandwich du Sud (Îles)', 'Haïti', 'Heard et McDonald (Îles)', 'Honduras', 'Hong Kong', 'Hongrie', 'Îles Mineures Éloignées des États-Unis', 'Inde', 'Indonésie', 'Irak', 'Iran', 'Irlande', 'Islande', 'Israël', 'Italie', 'Jamaïque', 'Japon', 'Jordanie', 'Kazakhstan', 'Kenya', 'Kirghizistan', 'Kiribati', 'Koweit', 'La Barbad', 'Laos', 'Lesotho', 'Lettonie', 'Liban', 'Libye', 'Libéria', 'Liechtenstein', 'Lithuanie', 'Luxembourg', 'Macau', 'Macédoine', 'Madagascar', 'Malaisie', 'Malawi', 'Maldives (Îles)', 'Mali', 'Malte', 'Mariannes du Nord (Îles)', 'Maroc', 'Marshall (Îles)', 'Martinique', 'Maurice', 'Mauritanie', 'Mayotte', 'Mexique', 'Micronésie (États fédérés de)', 'Moldavie', 'Monaco', 'Mongolie', 'Montserrat', 'Mozambique', 'Myanmar', 'Namibie', 'Nauru', 'Nepal',
        'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk (Îles)', 'Norvège', 'Nouvelle Calédonie', 'Nouvelle-Zélande', 'Oman', 'Ouganda', 'Ouzbékistan', 'Pakistan', 'Palau', 'Panama', 'Papouasie-Nouvelle-Guinée', 'Paraguay', 'Pays-Bas', 'Philippines', 'Pitcairn (Îles)', 'Pologne', 'Polynésie française', 'Porto Rico', 'Portugal', 'Pérou', 'Qatar', 'Roumanie', 'Royaume-Uni', 'Russie', 'Rwanda', 'Rép. Dém. du Congo', 'République centrafricaine', 'République Dominicaine', 'République tchèque', 'Réunion (La)', 'Sahara Occidental', 'Saint Pierre et Miquelon', 'Saint Vincent et les Grenadines', 'Saint-Kitts et Nevis', 'Saint-Marin (Rép. de)', 'Sainte Hélène', 'Sainte Lucie', 'Samoa', 'Samoa', 'Seychelles', 'Sierra Leone', 'Singapour', 'Slovaquie', 'Slovénie', 'Somalie', 'Soudan', 'Sri Lanka', 'Suisse', 'Suriname', 'Suède', 'Svalbard et Jan Mayen (Îles)', 'Swaziland', 'Syrie', 'São Tomé et Príncipe (Rép.)', 'Sénégal', 'Tadjikistan', 'Taiwan', 'Tanzanie', 'Tchad',
        'Territoire britannique de l\'océan Indien', 'Territoires français du sud', 'Thailande', 'Timor', 'Togo', 'Tokelau', 'Tonga', 'Trinité et Tobago', 'Tunisie', 'Turkménistan', 'Turks et Caïques (Îles)', 'Turquie', 'Tuvalu', 'Ukraine', 'Uruguay', 'Vanuatu', 'Vatican (Etat du)', 'Venezuela', 'Vierges (Îles)', 'Vierges britanniques (Îles)', 'Vietnam', 'Wallis et Futuna (Îles)', 'Yemen', 'Yougoslavie', 'Zambie', 'Zaïre', 'Zimbabwe',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Regions_of_France
     */
    private array $regions = [
        'Auvergne-Rhône-Alpes', 'Bourgogne-Franche-Comté', 'Bretagne', 'Centre-Val de Loire', 'Corse', 'Grand Est', 'Hauts-de-France',
        'Île-de-France', 'Normandie', 'Nouvelle-Aquitaine', 'Occitanie', 'Pays de la Loire', "Provence-Alpes-Côte d'Azur",
        'Guadeloupe', 'Martinique', 'Guyane', 'La Réunion', 'Mayotte',
    ];

    private array $departments = [
        ['01' => 'Ain'], ['02' => 'Aisne'], ['03' => 'Allier'], ['04' => 'Alpes-de-Haute-Provence'], ['05' => 'Hautes-Alpes'],
        ['06' => 'Alpes-Maritimes'], ['07' => 'Ardèche'], ['08' => 'Ardennes'], ['09' => 'Ariège'], ['10' => 'Aube'],
        ['11' => 'Aude'], ['12' => 'Aveyron'], ['13' => 'Bouches-du-Rhône'], ['14' => 'Calvados'], ['15' => 'Cantal'],
        ['16' => 'Charente'], ['17' => 'Charente-Maritime'], ['18' => 'Cher'], ['19' => 'Corrèze'], ['2A' => 'Corse-du-Sud'],
        ['2B' => 'Haute-Corse'], ['21' => "Côte-d'Or"], ['22' => "Côtes-d'Armor"], ['23' => 'Creuse'], ['24' => 'Dordogne'],
        ['25' => 'Doubs'], ['26' => 'Drôme'], ['27' => 'Eure'], ['28' => 'Eure-et-Loir'], ['29' => 'Finistère'], ['30' => 'Gard'],
        ['31' => 'Haute-Garonne'], ['32' => 'Gers'], ['33' => 'Gironde'], ['34' => 'Hérault'], ['35' => 'Ille-et-Vilaine'],
        ['36' => 'Indre'], ['37' => 'Indre-et-Loire'], ['38' => 'Isère'], ['39' => 'Jura'], ['40' => 'Landes'], ['41' => 'Loir-et-Cher'],
        ['42' => 'Loire'], ['43' => 'Haute-Loire'], ['44' => 'Loire-Atlantique'], ['45' => 'Loiret'], ['46' => 'Lot'],
        ['47' => 'Lot-et-Garonne'], ['48' => 'Lozère'], ['49' => 'Maine-et-Loire'], ['50' => 'Manche'], ['51' => 'Marne'],
        ['52' => 'Haute-Marne'], ['53' => 'Mayenne'], ['54' => 'Meurthe-et-Moselle'], ['55' => 'Meuse'], ['56' => 'Morbihan'],
        ['57' => 'Moselle'], ['58' => 'Nièvre'], ['59' => 'Nord'], ['60' => 'Oise'], ['61' => 'Orne'], ['62' => 'Pas-de-Calais'],
        ['63' => 'Puy-de-Dôme'], ['64' => 'Pyrénées-Atlantiques'], ['65' => 'Hautes-Pyrénées'], ['66' => 'Pyrénées-Orientales'],
        ['67' => 'Bas-Rhin'], ['68' => 'Haut-Rhin'], ['69' => 'Rhône'], ['70' => 'Haute-Saône'], ['71' => 'Saône-et-Loire'],
        ['72' => 'Sarthe'], ['73' => 'Savoie'], ['74' => 'Haute-Savoie'], ['75' => 'Paris'], ['76' => 'Seine-Maritime'],
        ['77' => 'Seine-et-Marne'], ['78' => 'Yvelines'], ['79' => 'Deux-Sèvres'], ['80' => 'Somme'], ['81' => 'Tarn'],
        ['82' => 'Tarn-et-Garonne'], ['83' => 'Var'], ['84' => 'Vaucluse'], ['85' => 'Vendée'], ['86' => 'Vienne'],
        ['87' => 'Haute-Vienne'], ['88' => 'Vosges'], ['89' => 'Yonne'], ['90' => 'Territoire de Belfort'], ['91' => 'Essonne'],
        ['92' => 'Hauts-de-Seine'], ['93' => 'Seine-Saint-Denis'], ['94' => 'Val-de-Marne'], ['95' => "Val-d'Oise"],
        ['971' => 'Guadeloupe'], ['972' => 'Martinique'], ['973' => 'Guyane'], ['974' => 'La Réunion'], ['976' => 'Mayotte'],
    ];

    protected array $secondaryAddressFormats = ['Apt. ###', 'Suite ###', 'Étage ###', 'Bât. ###', 'Chambre ###'];

    protected array $buildingNumber = ['%##', '%#', '%', '#a', '#b', '#c'];

    protected array $streetPrefix = ['Rue', 'Rue', 'Chemin', 'Avenue', 'Boulevard', 'Place', 'Impasse'];

    protected array $postcode = ['####'];

    /**
     * @see https://fr.wikipedia.org/wiki/Villes_de_Suisse
     */
    protected array $cityNames = [
        'Aarau', 'Aarberg', 'Aarburg', 'Agno', 'Aigle VD', 'Altdorf', 'Altstätten', 'Appenzell', 'Arbon', 'Ascona', 'Aubonne', 'Avenches',
        'Baden', 'Bad Zurzach', 'Bâle', 'Bellinzone', 'Berne', 'Beromünster', 'Berthoud', 'Biasca', 'Bienne', 'Bischofszell', 'Boudry', 'Bourg-Saint-Pierre', 'Bremgarten AG', 'Brigue', 'Brugg', 'Bulle', 'Bülach',
        'Cerlier', 'Châtel-Saint-Denis',
        'Coire', 'Conthey', 'Coppet', 'Cossonay', 'Croglio', 'Cudrefin', 'Cully',
        'Delémont', 'Diessenhofen', 'Échallens', 'Eglisau', 'Elgg', 'Estavayer-le-Lac',
        'Frauenfeld', 'Fribourg',
        'Genève', 'Glaris', 'Gordola', 'Grandcour', 'Grandson', 'Greifensee', 'Grüningen', 'Gruyères',
        'Hermance', 'Huttwil',
        'Ilanz',
        'Kaiserstuhl', 'Klingnau',
        'La Chaux-de-Fonds', 'La Neuveville', 'La Sarraz', 'La Tour-de-Peilz', 'La Tour-de-Trême', 'Le Landeron', 'Les Clées', 'Lachen', 'Langenthal', 'Laufon', 'Laufenburg', 'Laupen', 'Lausanne', 'Lenzburg', 'Loèche', 'Lichtensteig', 'Liestal', 'Locarno', 'Losone', 'Lugano', 'Lutry', 'Lucerne',
        'Maienfeld', 'Martigny', 'Mellingen', 'Mendrisio', 'Monthey', 'Morat', 'Morcote', 'Morges', 'Moudon', 'Moutier', 'Münchenstein',
        'Neuchâtel', 'Neunkirch', 'Nidau', 'Nyon',
        'Olten', 'Orbe', 'Orsières',
        'Payerne', 'Porrentruy',
        'Rapperswil', 'Regensberg', 'Rheinau', 'Rheineck', 'Rheinfelden', 'Riva San Vitale', 'Rolle', 'Romainmôtier', 'Romont FR', 'Rorschach', 'Rue',
        'Saillon', 'Saint-Maurice', 'Saint-Prex', 'Saint-Ursanne', 'Sala', 'Saint-Gall', 'Sargans', 'Sarnen', 'Schaffhouse', 'Schwytz', 'Sembrancher', 'Sempach', 'Sion', 'Soleure', 'Splügen', 'Stans', 'Steckborn', 'Stein am Rhein', 'Sursee',
        'Thoune', 'Thusis',
        'Unterseen', 'Uznach',
        'Valangin', 'Vevey', 'Villeneuve', 'Viège',
        'Waldenburg', 'Walenstadt', 'Wangen an der Aare', 'Werdenberg', 'Wiedlisbach', 'Wil', 'Willisau', 'Winterthour',
        'Yverdon-les-Bains',
        'Zofingue', 'Zoug', 'Zurich',
    ];

    /**
     * @see https://fr.wikipedia.org/wiki/Canton_suisse
     */
    protected array $canton = [
        ['AG' => 'Argovie'],
        ['AI' => 'Appenzell Rhodes-Intérieures'],
        ['AR' => 'Appenzell Rhodes-Extérieures'],
        ['BE' => 'Berne'],
        ['BL' => 'Bâle-Campagne'],
        ['BS' => 'Bâle-Ville'],
        ['FR' => 'Fribourg'],
        ['GE' => 'Genève'],
        ['GL' => 'Glaris'],
        ['GR' => 'Grisons'],
        ['JU' => 'Jura'],
        ['LU' => 'Lucerne'],
        ['NE' => 'Neuchâtel'],
        ['NW' => 'Nidwald'],
        ['OW' => 'Obwald'],
        ['SG' => 'Saint-Gall'],
        ['SH' => 'Schaffhouse'],
        ['SO' => 'Soleure'],
        ['SZ' => 'Schwytz'],
        ['TG' => 'Thurgovie'],
        ['TI' => 'Tessin'],
        ['UR' => 'Uri'],
        ['VD' => 'Vaud'],
        ['VS' => 'Valais'],
        ['ZG' => 'Zoug'],
        ['ZH' => 'Zurich'],
    ];

    protected array $cityFormats = [
        '{{cityName}}',
    ];

    protected array $streetNameFormats = [
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} de {{cityName}}',
        '{{streetPrefix}} de {{lastName}}',
    ];

    protected array $streetAddressFormats = [
        '{{streetName}} {{buildingNumber}}',
    ];
    protected array $addressFormats = [
        "{{streetAddress}}\n{{postcode}} {{city}}",
    ];

    /**
     * Returns a random street prefix
     *
     * @example Rue
     *
     * @return string
     */
    public function streetPrefix(): string
    {
        return $this->randomizer->randomElement($this->streetPrefix);
    }

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


    /**
     * @example 'Appt. 350'
     */
    public function secondaryAddress(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->secondaryAddressFormats));
    }

    /**
     * Randomly returns a french region.
     *
     * @example 'Guadeloupe'
     *
     * @return string
     */
    public function region(): string
    {
        return $this->randomizer->randomElement($this->regions);
    }

    /**
     * Randomly returns a french department ('departmentNumber' => 'departmentName').
     *
     * @example array('2B' => 'Haute-Corse')
     *
     * @return array
     */
    public function department(): array
    {
        return $this->randomizer->randomElement($this->departments);
    }

    /**
     * Randomly returns a french department name.
     *
     * @example 'Ardèche'
     *
     * @return string
     */
    public function departmentName()
    {
        $randomDepartmentName = array_values($this->department());

        return $randomDepartmentName[0];
    }

    /**
     * Randomly returns a french department number.
     *
     * @example '59'
     *
     * @return string
     */
    public function departmentNumber()
    {
        $randomDepartmentNumber = array_keys($this->department());

        return $randomDepartmentNumber[0];
    }
}
