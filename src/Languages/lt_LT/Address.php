<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\lt_LT;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    protected array $cityPrefix = ['miestas'];

    protected array $regionSuffix = ['regionas'];
    protected array $streetSuffix = [
        'g.', 'gatvė', 'prospektas', 'alėja',
    ];

    protected array $buildingNumber = ['%#'];

    protected array $postcode = ['LT-#####'];

    protected array $country = [
        'Afganistanas', 'Airija', 'Alandų salos', 'Albanija', 'Alžyras', 'Amerikos Samoa', 'Andora',
        'Angilija', 'Angola', 'Antarktis', 'Antigva ir Barbuda', 'Argentina', 'Armėnija', 'Aruba', 'Australija', 'Austrija',
        'Azerbaidžanas', 'Bahamos', 'Bahreinas', 'Baltarusija', 'Bangladešas', 'Barbadosas', 'Belgija', 'Belizas',
        'Beninas', 'Bermuda', 'Bisau Gvinėja', 'Bolivija', 'Bosnija ir Hercegovina', 'Botsvana', 'Bouvet sala', 'Brazilija',
        'Brunėjus', 'Bulgarija', 'Burkina Fasas', 'Burundis', 'Butanas', 'Centrinės Afrikos Respublika', 'Danija',
        'Didžioji Britanija', 'Didžiosios Britanijos Mergelių salos', 'Dominika', 'Dominikos Respublika',
        'Dramblio Kaulo Krantas',
        'Džersis', 'Džibutis', 'Egiptas', 'Ekvadoras', 'Eritrėja', 'Estija', 'Etiopija', 'Falklando salos', 'Farerų salos',
        'Fidžis', 'Filipinai', 'Gabonas', 'Gajana', 'Gambija', 'Gana', 'Gibraltaras', 'Graikija', 'Grenada', 'Grenlandija',
        'Gruzija', 'Guamas', 'Guernsis', 'Gvadelupė', 'Gvatemala', 'Gvinėja', 'Haitis', 'Heardo ir McDonaldo Salų Sritis',
        'Hondūras', 'Indija', 'Indijos vandenyno britų sritis', 'Indonezija', 'Irakas', 'Iranas', 'Islandija', 'Ispanija',
        'Italija', 'Izraelis', 'Jamaika', 'Japonija', 'Jemenas', 'Jordanija', 'Jungtiniai Arabų Emyratai', 'Jungtinių
    Valstijų mažosios aplinkinės salos', 'Jungtinės Valstijos', 'Juodkalnija', 'Kaimanų salos', 'Kalėdų sala',
        'Kambodža', 'Kamerūnas', 'Kanada', 'Kataras', 'Kazachstanas', 'Kenija', 'Kinija', 'Kinijos S.A.R.Honkongas',
        'Kipras', 'Kirgiztanas', 'Kiribatis', 'Kokosų salos', 'Kolumbija', 'Komorai', 'Kongas', 'Kongo Demokratinė
    Respublika', 'Kosta Rika', 'Kroatija', 'Kuba', 'Kuko salos', 'Kuveitas', 'Laosas', 'Latvija', 'Lenkija', 'Lesotas',
        'Libanas', 'Liberija', 'Libija', 'Lichtenšteinas', 'Lietuva', 'Liuksemburgas', 'Macao', 'Madagaskaras',
        'Makedonija', 'Malaizija', 'Malavis', 'Maldivai', 'Malis', 'Malta', 'Marianos šiaurinės salos', 'Marokas',
        'Martinika', 'Maršalo Salos', 'Mauricijus', 'Mauritanija', 'Mayotte’as', 'Meino sala', 'Meksika', 'Mergelių salos
    (JAV)', 'Mianmaras', 'Mikronezija', 'Moldova', 'Monakas', 'Mongolija', 'Montserratas', 'Mozambikas', 'Namibija',
        'Naujoji Kaledonija', 'Naujoji Zelandija', 'Nauru', 'Nepalas', 'Nežinoma ar neteisinga sritis', 'Nigerija',
        'Nigeris', 'Nikaragva', 'Niue', 'Norfolko sala', 'Norvegija', 'Nyderlandai', 'Olandijos Antilai', 'Omanas',
        'Pakistanas', 'Palau', 'Palestinos teritorija', 'Panama', 'Papua Naujoji Gvinėja', 'Paragvajus', 'Peru', 'Pietų
    Afrika', 'Pietų Džordžija ir Pietų Sandvičo salos', 'Pietų Korėja', 'Pitkernas', 'Portugalija', 'Prancūzija',
        'Prancūzijos Gviana', 'Prancūzijos Pietų sritys', 'Prancūzų Polinezija', 'Puerto Rikas', 'Pusiaujo Gvinėja',
        'Reunionas', 'Ruanda', 'Rumunija', 'Rusijos Federacija', 'Rytų Timoras', 'Saint-Martin', 'Saliamono salos',
        'Salvadoras', 'Samoa', 'San Marinas', 'San Tomė ir Principė', 'Saudo Arabija', 'Seišeliai', 'Sen Pjeras ir
    Mikelonas', 'Senegalas', 'Sent Kitsas ir Nevis', 'Serbija', 'Serbija ir Juodkalnija', 'Siera Leonė', 'Singapūras',
        'Sirija', 'Slovakija', 'Slovėnija', 'Somalis', 'Sudanas', 'Suomija', 'Surinamas', 'Svalbardo ir Jan Majen salos',
        'Svazilendas', 'Tadžikistanas', 'Tailandas', 'Taivanas', 'Tanzanija', 'Togas', 'Tokelau', 'Tonga', 'Trinidadas ir
    Tobagas', 'Tunisas', 'Turkija', 'Turkmėnistanas', 'Turkso ir Caicoso salos', 'Tuvalu', 'Uganda', 'Ukraina',
        'Urugvajus', 'Uzbekistanas', 'Vakarų Sachara', 'Vanuatu', 'Vatikanas', 'Venesuela', 'Vengrija', 'Vietnamas',
        'Vokietija', 'Wallisas ir Futuna', 'Zambija', 'Zimbabvė', 'Čadas', 'Čekija', 'Čilė', 'Šiaurės Korėja', 'Šri Lanka',
        'Švedija', 'Šveicarija', 'Šventasis Vincentas ir Grenadinai', 'Švento Baltramiejaus sala', 'Šventoji Elena',
        'Šventoji Liucija', 'Žaliasis Kyšulys', ];

    /**
     * @see https://lt.wikipedia.org/wiki/Lietuvos_etnokult%C5%ABriniai_regionai
     */
    protected array $region = [
        'Aukštaitija', 'Dzūkija', 'Suvalkija', 'Žemaitija',
    ];

    /**
     * @see https://lt.wikipedia.org/wiki/S%C4%85ra%C5%A1as:Lietuvos_miestai_pagal_gyventojus
     */
    protected array $city = ['Vilnius', 'Kaunas', 'Klaipėda', 'Šiauliai', 'Panevėžys',
        'Alytus', 'Marijampolė', 'Mažeikiai', 'Jonava', 'Utena', 'Kėdainiai', 'Telšiai', 'Visaginas', 'Tauragė',
        'Ukmergė',
    ];

    protected array $street = [
        'Klaipėdos', 'Vilniaus', 'Kauno', 'Žalgirio', 'Saltoniškių', 'Laisvės', 'Didžioji', 'Liepų',
    ];

    protected array $addressFormats = [
        '{{street}} {{streetSuffix}} {{buildingNumber}}-{{buildingNumber}}, {{city}}',
        '{{street}} {{streetSuffix}} {{buildingNumber}}, {{city}}',
        '{{street}} {{streetSuffix}} {{buildingNumber}}, {{city}} {{postcode}}',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Municipalities_of_Lithuania
     */
    private array $municipality = [
        'Akmenės rajono savivaldybė',
        'Alytaus miesto savivaldybė',
        'Alytaus rajono savivaldybė',
        'Anykščių rajono savivaldybė',
        'Birštono savivaldybė',
        'Biržų rajono savivaldybė',
        'Druskininkų savivaldybė',
        'Elektrėnų savivaldybė',
        'Ignalinos rajono savivaldybė',
        'Jonavos rajono savivaldybė',
        'Joniškio rajono savivaldybė',
        'Jurbarko rajono savivaldybė',
        'Kaišiadorių rajono savivaldybė',
        'Kalvarijos savivaldybė',
        'Kauno miesto savivaldybė',
        'Kauno rajono savivaldybė',
        'Kazlų Rūdos savivaldybė',
        'Kėdainių rajono savivaldybė',
        'Kelmės rajono savivaldybė',
        'Klaipėdos miesto savivaldybė',
        'Klaipėdos rajono savivaldybė',
        'Kretingos rajono savivaldybė',
        'Kupiškio rajono savivaldybė',
        'Lazdijų rajono savivaldybė',
        'Marijampolės savivaldybė',
        'Mažeikių rajono savivaldybė',
        'Molėtų rajono savivaldybė',
        'Neringos savivaldybė',
        'Pagėgių savivaldybė',
        'Pakruojo rajono savivaldybė',
        'Palangos miesto savivaldybė',
        'Panevėžio miesto savivaldybė',
        'Panevėžio rajono savivaldybė',
        'Pasvalio rajono savivaldybė',
        'Plungės rajono savivaldybė',
        'Prienų rajono savivaldybė',
        'Radviliškio rajono savivaldybė',
        'Raseinių rajono savivaldybė',
        'Rietavo savivaldybė',
        'Rokiškio rajono savivaldybė',
        'Skuodo rajono savivaldybė',
        'Šakių rajono savivaldybė',
        'Šalčininkų rajono savivaldybė',
        'Šiaulių miesto savivaldybė',
        'Šiaulių rajono savivaldybė',
        'Šilalės rajono savivaldybė',
        'Šilutės rajono savivaldybė',
        'Širvintų rajono savivaldybė',
        'Švenčionių rajono savivaldybė',
        'Tauragės rajono savivaldybė',
        'Telšių rajono savivaldybė',
        'Trakų rajono savivaldybė',
        'Ukmergės rajono savivaldybė',
        'Utenos rajono savivaldybė',
        'Varėnos rajono savivaldybė',
        'Vilkaviškio rajono savivaldybė',
        'Vilniaus miesto savivaldybė',
        'Vilniaus rajono savivaldybė',
        'Visagino savivaldybė',
        'Zarasų rajono savivaldybė',
    ];

    public function buildingNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->buildingNumber));
    }

    public function address(): string
    {
        $format = $this->randomizer->randomElement($this->addressFormats);

        return $this->generator->parse($format);
    }

    public function country(): string
    {
        return $this->randomizer->randomElement($this->country);
    }

    public function postcode(): string
    {
        return $this->replacer->toUpper($this->replacer->bothify($this->randomizer->randomElement($this->postcode)));
    }

    public function regionSuffix()
    {
        return $this->randomizer->randomElement($this->regionSuffix);
    }

    public function region(): string
    {
        return $this->randomizer->randomElement($this->region);
    }

    public function citySuffix(): string
    {
        return $this->randomizer->randomElement($this->citySuffix);
    }

    public function city(): string
    {
        return $this->randomizer->randomElement($this->city);
    }

    public function streetSuffix(): string
    {
        return $this->randomizer->randomElement($this->streetSuffix);
    }

    public function street()
    {
        return $this->randomizer->randomElement($this->street);
    }

    /**
     * Lithuania municipality
     *
     * @see https://en.wikipedia.org/wiki/Municipality
     *
     * @return string
     */
    public function municipality(): string
    {
        return $this->randomizer->randomElement($this->municipality);
    }

}
