<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fr_CA;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    protected array $streetPrefix = ['rue', 'rue', 'chemin', 'avenue', 'boulevard', 'place', 'impasse'];

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

    protected array $cityPrefix = ['Saint-', 'Sainte-', 'St-', 'Ste-'];

    /**
     * The suffixes come from this list of communities in Québec
     * http://fr.wikipedia.org/wiki/Liste_des_municipalités_locales_du_Québec
     */
    protected array $citySuffix = [
        // Bas-Saint-Laurent
        '-des-Sables', '-sur-Mer', '-des-Neiges', '-des-Sept-Douleurs', '-du-Portage', '-du-Loup', '-des-Lacs', '-de-Lessard',
        '-de-Kamourasca', '-de-Témiscouata', '-de-Ladrière', '-de-Rimouski', '-de-Rivière-du-Loup', '-du-Lac', '-du-Ha! Ha!',
        '-du-Lac-Long', '-de-Rioux', '-du-Squatec', '-de-Métis', '-d\'Ixworth', '-de-la-Croix', '-de-Matane', '-du-Lac-Humqui',
        '-de-Mérici', '-de-la-Pocatière', '-sur-le-Lac',
        // Saguenay–Lac-Saint-Jean
        '-de-Lorette', '-du-Lac-Saint-Jean', '-de-Bourget', '-de-Falardeau', '-les-Plaines', '-de-Sales', '-de-Taillon',
        '-de-Milot', '-du-Nord',
        // Québec (Capitale-Nationale)
        '-aux-Coudres', '-des-Anges', '-de-Desmaures', '-les-Neiges', '-de-l\'Île-d\'Orléans', '-de-Valcartier',
        '-de-Portneuf', '-du-Cap-Tourmente', '-des-Carrières', '-des-Caps', '-de-Beaupré', '-de-Laval', '-de-la-Jacques-Cartier',
        '-d\'Auvergne',
        // Mauricie
        '-de-Monteauban', '-du-Mont-Carmel', '-des-Monts', '-de-Maskinongé', '-de-Caxton', '-des-Grès', '-le-Grand',
        '-de-Vincennes', '-du-Parc', '-de-Champlain', '-de-Mékinac', '-de-Prémont', '-de-la-Pérade', '-de-Batiscan',
        // Estrie (Cantons de l'est)
        '-Ouest', '-Est', '-Sud', '-Nord', '-des-Bois', '-de-Woburn', '-de-Brompton', '-de-Bolton', '-de-Windsor',
        '-de-Clifton', '-de-Paquette', '-de-la-Rochelle', '-de-Hatley', '-de-Whitton',
        // Montréal
        '-de-Bellevue',
        // Chaudière-Appalaches
        '-de-Buckland', '-des-Pins', '-du-Rosaire', '-d\'Issoudun', '-de-Jésus', '-d\'Irlande', '-de-l\'Isle-aux-Grues',
        '-de-Tilly', '-de-Lellis', '-de-Bellechasse', '-de-Lessard', '-de-L\'Islet', '-de-Lotbinière', '-de-Beauce',
        '-de-Forsyth', '-de-Panet', '-de-la-Rivière-du-Sud', '-de-Dorset', '-de-Shenley', '-de-Leeds', '-de-Wolfestown',
        '-de-Joly', '-de-Brébeuf', '-de-Coleraine', '-des-Érables', '-Bretenières', '-de-Lauzon', '-de-Standon',
        '-de-Gonzague', '-de-Beaurivage', '-de-Dorchester', '-de-Cranbourne', '-de-Broughton', '-de-la-Rivière-du-Sud',
        '-des-Aulnaies', '-les-Mines', '-de-Lotbinière', '-de-Patton', '-sur-Rivière-du-Sud', '-de-Beauregard', '-de-Watford',
    ];

    /**
     * @example 'Saint-Marc-des-Carrières' or 'Sainte-Monique'
     */
    protected array $cityFormats = [
        '{{cityPrefix}}{{firstName}}{{citySuffix}}',
        '{{cityPrefix}}{{firstName}}',
    ];

    protected array $buildingNumber = ['%####', '%###', '%##', '%#', '%'];

    protected array $streetSuffix = [
        'Autoroute', 'Avenue', 'Boulevard', 'Chemin', 'Route', 'Rue', 'Pont',
    ];

    protected array $postcode = ['?#? #?#', '?#?#?#'];

    /**
     * @example 'Avenue Bolduc'
     */
    protected array $streetNameFormats = [
        '{{streetSuffix}} {{firstName}}',
        '{{streetSuffix}} {{lastName}}',
    ];

    protected array $streetAddressFormats = [
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}} {{streetName}} {{secondaryAddress}}',
    ];

    protected array $addressFormats = [
        '{{streetAddress}}, {{city}}, {{stateAbbr}} {{postcode}}',
    ];

    protected array $secondaryAddressFormats = ['Apt. ###', 'Suite ###', 'Bureau ###'];

    protected array $state = [
        'Alberta', 'Colombie-Britannique', 'Manitoba', 'Nouveau-Brunswick', 'Terre-Neuve-et-Labrador', 'Nouvelle-Écosse', 'Ontario', 'Île-du-Prince-Édouard', 'Québec', 'Saskatchewan',
    ];

    protected array $stateAbbr = [
        'AB', 'BC', 'MB', 'NB', 'NL', 'NS', 'ON', 'PE', 'QC', 'SK',
    ];

    /**
     * @example 'Saint-'
     */
    public function cityPrefix(): string
    {
        return $this->randomizer->randomElement($this->cityPrefix);
    }

    /**
     * @example '-des-Sables'
     */
    public function citySuffix(): string
    {
        return $this->randomizer->randomElement($this->citySuffix);
    }

    /**
     * @example 'Bureau 500'
     */
    public function secondaryAddress(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->secondaryAddressFormats));
    }

    /**
     * @example 'Québec'
     */
    public function state(): string
    {
        return $this->randomizer->randomElement($this->state);
    }

    /**
     * @example 'QC'
     */
    public function stateAbbr(): string
    {
        return $this->randomizer->randomElement($this->stateAbbr);
    }

    /**
     * @example 'rue'
     */
    public function streetPrefix(): string
    {
        return $this->randomizer->randomElement($this->streetPrefix);
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
