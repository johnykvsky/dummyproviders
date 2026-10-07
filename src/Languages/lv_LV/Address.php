<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\lv_LV;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    protected array $cityPrefix = ['pilsēta'];

    protected array $regionSuffix = ['reģions'];
    protected array $streetPrefix = [
        'iela', 'bulvāris', 'skvērs', 'gāte',
    ];

    protected array $buildingNumber = ['%#'];
    protected array $postcode = ['LV-####'];

    /**
     * @see https://lv.wikipedia.org/wiki/Suver%C4%93no_valstu_uzskait%C4%ABjums
     */
    protected array $country = [
        'Afganistāna', 'Albānija', 'Alžīrija', 'Amerikas Savienotās Valstis', 'Andora', 'Angola', 'Antigva un Barbuda',
        'Apvienotie Arābu Emirāti', 'Argentīna', 'Armēnija', 'Austrālija', 'Austrija', 'Austrumtimora', 'Azerbaidžāna',
        'Bahamas', 'Bahreina', 'Baltkrievija', 'Bangladeša', 'Barbadosa', 'Beliza', 'Beļģija', 'Benina', 'Bolīvija',
        'Bosnija un Hercegovina', 'Botsvana', 'Brazīlija', 'Bruneja', 'Bulgārija', 'Burkinafaso', 'Burundi', 'Butāna',
        'Centrālāfrikas Republika', 'Čada', 'Čehija', 'Čīle', 'Dānija', 'Dienvidāfrikas Republika', 'Dienvidkoreja',
        'Dienvidsudāna', 'Dominika', 'Dominikāna', 'Džibutija', 'Ekvadora', 'Ekvatoriālā Gvineja', 'Eritreja',
        'Etiopija', 'Ēģipte', 'Fidži', 'Filipīnas', 'Francija', 'Gabona', 'Gajāna', 'Gambija', 'Gana', 'Grenada',
        'Grieķija', 'Gruzija', 'Gvatemala', 'Gvineja', 'Gvineja-Bisava', 'Haiti', 'Hondurasa', 'Horvātija', 'Igaunija',
        'Indija', 'Indonēzija', 'Irāka', 'Irāna', 'Islande', 'Itālija', 'Izraēla', 'Īrija', 'Jamaika', 'Japāna',
        'Jaunzēlande', 'Jemena', 'Jordānija', 'Kaboverde', 'Kambodža', 'Kamerūna', 'Kanāda', 'Katara', 'Kazahstāna',
        'Kenija', 'Kipra', 'Kirgizstāna', 'Kiribati', 'Kolumbija', 'Komoru Salas', 'Kongo', 'Kongo DR', 'Kostarika',
        'Kotdivuāra', 'Krievija', 'Kuba', 'Kuveita', 'Ķīna', 'Laosa', 'Latvija', 'Lesoto', 'Libāna', 'Libērija',
        'Lībija', 'Lielbritānija', 'Lietuva', 'Lihtenšteina', 'Luksemburga', 'Madagaskara', 'Maķedonijas Republika',
        'Malaizija', 'Malāvija', 'Maldīvija', 'Mali', 'Malta', 'Maroka', 'Māršala Salas', 'Maurīcija', 'Mauritānija',
        'Meksika', 'Melnkalne', 'Mikronēzija', 'Mjanma', 'Moldova', 'Monako', 'Mongolija', 'Mozambika', 'Namībija',
        'Nauru', 'Nepāla', 'Nīderlande', 'Nigēra', 'Nigērija', 'Nikaragva', 'Norvēģija', 'Omāna', 'Pakistāna', 'Palau',
        'Panama', 'Papua-Jaungvineja', 'Paragvaja', 'Peru', 'Polija', 'Portugāle', 'Ruanda', 'Rumānija', 'Salvadora',
        'Samoa', 'Sanmarīno', 'Santome un Prinsipi', 'Saūda Arābija', 'Seišelu Salas', 'Senegāla',
        'Sentkitsa un Nevisa', 'Sentlūsija', 'Sentvinsenta un Grenadīnas', 'Serbija', 'Singapūra', 'Sīrija',
        'Sjerraleone', 'Slovākija', 'Slovēnija', 'Somālija', 'Somija', 'Spānija', 'Sudāna', 'Surinama', 'Svazilenda',
        'Šrilanka', 'Šveice', 'Tadžikistāna', 'Taizeme', 'Tanzānija', 'Togo', 'Tonga', 'Trinidāda un Tobāgo',
        'Tunisija', 'Turcija', 'Turkmenistāna', 'Tuvalu', 'Uganda', 'Ukraina', 'Ungārija', 'Urugvaja', 'Uzbekistāna',
        'Vācija', 'Vanuatu', 'Vatikāns', 'Venecuēla', 'Vjetnama', 'Zālamana Salas', 'Zambija', 'Ziemeļkoreja',
        'Zimbabve', 'Zviedrija',
    ];

    protected array $region = [
        'Kurzemes', 'Latgales', 'Rīgas', 'Vidzemes', 'Zemgales',
    ];

    protected array $city = ['Aizkraukle', 'Aluksne', 'Balvi', 'Bauska', 'Cesis',
        'Daugavpils', 'Dobele', 'Gulbene', 'Jekabpils', 'Jelgava', 'Kraslava', 'Kuldiga', 'Liepaja',
        'Limbazi', 'Ludza', 'Madona', 'Mobile Phones', 'Ogre', 'Preili', 'Rezekne', 'Rīga', 'Ventspils',
    ];

    protected array $street = [
        'Alfrēda Kalniņa', 'Alksnāja', 'Amatu', 'Anglikāņu', 'Arhitektu', 'Arsenāla', 'Artilērijas',
        'Aspazijas', 'Atgriežu', 'Audēju', 'Basteja', 'Baumaņa', 'Bīskapa', 'Blaumaņa', 'Brīvības', 'Brīvības',
        'Bruņinieku', 'Dainas', 'Daugavas',
    ];

    protected array $addressFormats = [
        '{{postcode}}, {{region}} {{regionSuffix}}, {{city}} {{cityPrefix}}, {{street}} {{streetPrefix}}, {{buildingNumber}}',
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

    public function cityPrefix(): string
    {
        return $this->randomizer->randomElement($this->cityPrefix);
    }

    public function city(): string
    {
        return $this->randomizer->randomElement($this->city);
    }

    public function streetPrefix(): string
    {
        return $this->randomizer->randomElement($this->streetPrefix);
    }

    public function street()
    {
        return $this->randomizer->randomElement($this->street);
    }

}
