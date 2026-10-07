<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\sk_SK;

use DummyGenerator\Core\Person as BasePerson;

class Person extends BasePerson
{
    protected array $lastNameFormat = [
        '{{lastNameMale}}',
        '{{lastNameFemale}}',
    ];

    protected array $maleNameFormats = [
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastNameMale}} {{suffix}}',
    ];

    protected array $femaleNameFormats = [
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}} {{suffix}}',
    ];

    protected array $firstNameMale = [
        'Drahoslav', 'Severín', 'Alexej', 'Ernest', 'Rastislav', 'Radovan', 'Dobroslav', 'Dalibor', 'Vincent', 'Miloš', 'Timotej', 'Gejza', 'Bohuš',
        'Alfonz', 'Gašpar', 'Emil', 'Erik', 'Blažej', 'Zdenko', 'Dezider', 'Arpád', 'Valentín', 'Pravoslav', 'Jaromír', 'Roman', 'Matej', 'Frederik',
        'Viktor', 'Alexander', 'Radomír', 'Albín', 'Bohumil', 'Kazimír', 'Fridrich', 'Radoslav', 'Tomáš', 'Alan', 'Branislav', 'Bruno', 'Gregor',
        'Vlastimil', 'Boleslav', 'Eduard', 'Jozef', 'Víťazoslav', 'Blahoslav', 'Beňadik', 'Adrián', 'Gabriel', 'Marián', 'Emanuel', 'Miroslav',
        'Benjamín', 'Hugo', 'Richard', 'Izidor', 'Zoltán', 'Albert', 'Igor', 'Július', 'Aleš', 'Fedor', 'Rudolf', 'Valér', 'Marcel', 'Ervín',
        'Slavomír', 'Vojtech', 'Juraj', 'Marek', 'Jaroslav', 'Žigmund', 'Florián', 'Roland', 'Pankrác', 'Servác', 'Bonifác', 'Svetozár', 'Bernard',
        'Júlia', 'Urban', 'Dušan', 'Viliam', 'Ferdinand', 'Norbert', 'Róbert', 'Medard', 'Zlatko', 'Anton', 'Vasil', 'Vít', 'Vratislav',
        'Alfréd', 'Alojz', 'Ján', 'Tadeáš', 'Ladislav', 'Peter', 'Pavol', 'Miloslav', 'Prokop', 'Cyril', 'Metod', 'Patrik', 'Oliver', 'Ivan',
        'Kamil', 'Henrich', 'Drahomír', 'Bohuslav', 'Iľja', 'Daniel', 'Vladimír', 'Jakub', 'Krištof', 'Ignác', 'Gustáv', 'Jerguš', 'Dominik',
        'Oskar', 'Vavrinec', 'Ľubomír', 'Mojmír', 'Leonard', 'Tichomír', 'Filip', 'Bartolomej', 'Ľudovít', 'Samuel', 'Augustín', 'Belo', 'Oleg',
        'Bystrík', 'Ctibor', 'Ľudomil', 'Konštantín', 'Ľuboslav', 'Matúš', 'Móric', 'Ľuboš', 'Ľubor', 'Vladislav', 'Cyprián', 'Václav', 'Michal',
        'Jarolím', 'Arnold', 'Levoslav', 'František', 'Dionýz', 'Maximilián', 'Koloman', 'Boris', 'Lukáš', 'Kristián', 'Vendelín', 'Sergej',
        'Aurel', 'Demeter', 'Denis', 'Hubert', 'Karol', 'Imrich', 'René', 'Bohumír', 'Teodor', 'Tibor', 'Maroš', 'Martin', 'Svätopluk', 'Stanislav',
        'Leopold', 'Eugen', 'Félix', 'Klement', 'Kornel', 'Milan', 'Vratko', 'Ondrej', 'Andrej', 'Edmund', 'Oldrich', 'Oto', 'Mikuláš', 'Ambróz',
        'Radúz', 'Bohdan', 'Adam', 'Štefan', 'Dávid', 'Silvester',

    ];

    protected array $firstNameFemale = [
        'Alexandra', 'Karina', 'Daniela', 'Andrea', 'Antónia', 'Bohuslava', 'Dáša', 'Malvína', 'Kristína', 'Nataša', 'Bohdana', 'Drahomíra',
        'Sára', 'Zora', 'Tamara', 'Ema', 'Tatiana', 'Erika', 'Veronika', 'Agáta', 'Dorota', 'Vanda', 'Zoja', 'Gabriela', 'Perla', 'Ida', 'Liana',
        'Miloslava', 'Vlasta', 'Lívia', 'Eleonóra', 'Etela', 'Romana', 'Zlatica', 'Anežka', 'Bohumila', 'Františka', 'Angela', 'Matilda',
        'Svetlana', 'Ľubica', 'Alena', 'Soňa', 'Vieroslava', 'Zita', 'Miroslava', 'Irena', 'Milena', 'Estera', 'Justína', 'Dana', 'Danica',
        'Jela', 'Jaroslava', 'Jarmila', 'Lea', 'Anastázia', 'Galina', 'Lesana', 'Hermína', 'Monika', 'Ingrida', 'Viktória', 'Blažena', 'Žofia',
        'Sofia', 'Gizela', 'Viola', 'Gertrúda', 'Zina', 'Júlia', 'Juliana', 'Želmíra', 'Ela', 'Vanesa', 'Iveta', 'Vilma', 'Petronela', 'Žaneta',
        'Xénia', 'Karolína', 'Lenka', 'Laura', 'Stanislava', 'Margaréta', 'Dobroslava', 'Blanka', 'Valéria', 'Paulína', 'Sidónia', 'Adriána',
        'Beáta', 'Petra', 'Melánia', 'Diana', 'Berta', 'Patrícia', 'Lujza', 'Amália', 'Milota', 'Nina', 'Margita', 'Kamila', 'Dušana', 'Magdaléna',
        'Oľga', 'Anna', 'Hana', 'Božena', 'Marta', 'Libuša', 'Božidara', 'Dominika', 'Hortenzia', 'Jozefína', 'Štefánia', 'Ľubomíra', 'Zuzana',
        'Darina', 'Marcela', 'Milica', 'Elena', 'Helena', 'Lýdia', 'Anabela', 'Jana', 'Silvia', 'Nikola', 'Ružena', 'Nora', 'Drahoslava', 'Linda',
        'Melinda', 'Rebeka', 'Rozália', 'Regína', 'Alica', 'Marianna', 'Miriama', 'Martina', 'Mária', 'Jolana', 'Ľudomila', 'Ľudmila', 'Olympia',
        'Eugénia', 'Ľuboslava', 'Zdenka', 'Edita', 'Michaela', 'Stela', 'Viera', 'Natália', 'Eliška', 'Brigita', 'Valentína', 'Terézia', 'Vladimíra',
        'Hedviga', 'Uršuľa', 'Alojza', 'Kvetoslava', 'Sabína', 'Dobromila', 'Klára', 'Simona', 'Aurélia', 'Denisa', 'Renáta', 'Irma', 'Agnesa',
        'Klaudia', 'Alžbeta', 'Elvíra', 'Cecília', 'Emília', 'Katarína', 'Henrieta', 'Bibiána', 'Barbora', 'Marína', 'Izabela', 'Hilda', 'Otília',
        'Lucia', 'Branislava', 'Bronislava', 'Ivica', 'Albína', 'Kornélia', 'Sláva', 'Slávka', 'Judita', 'Dagmara', 'Adela', 'Nadežda', 'Eva',
        'Filoména', 'Ivana', 'Milada',

    ];

    protected array $lastNameMale = [
        'Sloboda', 'Novotný', 'Kučera', 'Veselý', 'Horák', 'Marek', 'Pokorný', 'Král', 'Růžička', 'Zeman', 'Kolár', 'Urban', 'Bartoš', 'Vlček',
        'Polák', 'Kopecký', 'Konečný', 'Malý', 'Holub', 'Abrahám', 'Adam', 'Adamec', 'Almáši', 'Anderle', 'Antal', 'Babka', 'Bahna', 'Bahno',
        'Bajnok', 'Balaša', 'Balog', 'Balogh', 'Baláž', 'Baran', 'Baranka', 'Bartovič', 'Bartoš', 'Bača', 'Beck', 'Beihofner', 'Bella', 'Beran',
        'Bernolák', 'Beňo', 'Bicek', 'Bielik', 'Biringer', 'Blaho', 'Bondra', 'Bosák', 'Boška', 'Brezina', 'Bugár', 'Buš', 'Chalupka', 'Chudík',
        'Cyprich', 'Cíger', 'Dacej', 'Danko', 'Debnár', 'Dej', 'Dekýš', 'Doležal', 'Dostál', 'Dočolomanský', 'Drajna', 'Droppa', 'Dubovský',
        'Dudek', 'Dula', 'Dulla', 'Dusík', 'Dvonč', 'Dzurjanin', 'Dávid', 'Fabian', 'Fabián', 'Fajnor', 'Farkašovský', 'Feldek', 'Fico', 'Filc',
        'Filip', 'Finka', 'Ftorek', 'Galis', 'Gallo', 'Gašpar', 'Gašparovič', 'Gocník', 'Golonka', 'Greguš', 'Grznár', 'Hablák', 'Habšuda',
        'Haluška', 'Halák', 'Hanko', 'Hanzal', 'Hanzel', 'Hanzel', 'Haščák', 'Heretik', 'Hečko', 'Hlaváček', 'Hlinka', 'Hochschorner',
        'Holub', 'Holuby', 'Horváth', 'Hossa', 'Hraško', 'Hric', 'Hrmo', 'Hrušovský', 'Huba', 'Hudáček', 'Hála', 'Ihnačák', 'Janoška', 'Jantošovič',
        'Janík', 'Jonata', 'Jurina', 'Jurík', 'Jáni', 'Jánošík', 'Kaliský', 'Karul', 'Karvaš', 'Keníž', 'Klapka', 'Klaus', 'Kolník',
        'Konstantinidis', 'Korec', 'Kostrec', 'Kováč', 'Kováčik', 'Koza', 'Kubík', 'Kučera', 'Labuda', 'Langoš', 'Lepšík', 'Lexa', 'Lintner',
        'Lubina', 'Lukáč', 'Lupták', 'Líška', 'Majeský', 'Malachovský', 'Malíšek', 'Marián', 'Masaryk', 'Maslo', 'Matiaško', 'Medveď', 'Menyhért',
        'Mečiar', 'Mečíř', 'Mikloško', 'Mikulík', 'Mikuš', 'Mikúš', 'Mišík', 'Mojžiš', 'Mokroš', 'Molnár', 'Moravčík', 'Musil', 'Mydlo', 'Nagy',
        'Nemec', 'Neruda', 'Nezval', 'Nitra', 'Novák', 'Nábělek', 'Němec', 'Obšut', 'Otčenáš', 'Pauko', 'Pavlikovský', 'Pavúk', 'Pašek', 'Paška',
        'Paško', 'Pelikán', 'Petrovický', 'Petruška', 'Plch', 'Podhradská', 'Podkonický', 'Poliak', 'Procházka', 'Puskás', 'Puškáš', 'Raši',
        'Repiský', 'Riszdorfer', 'Romančík', 'Rozenberg', 'Rus', 'Ružička', 'Rúfus', 'Růžička', 'Samson', 'Sedliak', 'Senko', 'Sidor', 'Sklenka',
        'Skutecký', 'Slašťan', 'Sloboda', 'Slobodník', 'Slota', 'Slovák', 'Smrek', 'Stodola', 'Straka', 'Szabó', 'Sámel', 'Sýkora', 'Tatar',
        'Tatarka', 'Tatár', 'Tatárka', 'Timko', 'Tiso', 'Tomeček', 'Truben', 'Turčok', 'Tóth', 'Uram', 'Urblík', 'Vajcík', 'Valent', 'Valuška',
        'Varga', 'Vašíček', 'Vesel', 'Vico', 'Višňovský', 'Vydarený', 'Weiss', 'Zima', 'Zimka', 'Zipser', 'Zátopek', 'Zúbrik', 'Čaplovič',
        'Čarnogurský', 'Čierny', 'Ďaďo', 'Ďurica', 'Ďuriš', 'Šimonovič', 'Škriniar', 'Šouc', 'Šoustal', 'Štefan', 'Štefanka', 'Šulc', 'Šurka',
        'Švehla', 'Šťastný',

    ];

    protected array $lastNameFemale = [
        'Slobodová', 'Novotná', 'Čierna', 'Kučerová', 'Veselá', 'Krajčíová', 'Nemcová', 'Králová', 'Růžičková', 'Fialová', 'Zemanová',
        'Kolárová', 'Kováčová', 'Vlčková', 'Poláková', 'Kopecká', 'Šimková', 'Konečná', 'Malá', 'Holubová', 'Staneková', 'Šťastná',
        'Vargová', 'Tóthová', 'Horváthová', 'Balážová', 'Szabová', 'Molnárová', 'Balogová', 'Lukáčová', 'Vícenová', 'Ringlóciová', 'Popovičová',
        'Hulmanová', 'Zelenayová', 'Fingerlandová', 'Králiková', 'Kapustová', 'Hantuchová', 'Holéczyová', 'Butvínová', 'Oslejová', 'Radičová', 'Sárová',
        'Sobotková', 'Kažimírová', 'Plšková', 'Jakubová', 'Šindlerová', 'Ondrejková', 'Slobodníková', 'Sadloňová', 'Černá', 'Nosková',
        'Virčíková', 'Taliánová', 'Čuntalová', 'Oťapková', 'Zuzulová', 'Godolová', 'Gonová', 'Jančová', 'Kocúrová', 'Svobodová', 'Oravcová', 'Muráriková',
        'Holubová', 'Kubáňová', 'Ondrišová', 'Šoltisová', 'Molnárová', 'Rezníčková', 'Dubníčková', 'Karolčíková', 'Máliková', 'Malíková', 'Litajová',
        'Kolrusová', 'Košíková', 'Kušnírová', 'Kravjarová', 'Hotová', 'Hajzerová', 'Ferjenčíková', 'Senková', 'Adamcová', 'Pirošová', 'Šimonová',
        'Finková', 'Hrdá', 'Murčová',
    ];

    protected array $title = [
        'Bc.', 'Ing.', 'MUDr.', 'MVDr.', 'Mgr.', 'JUDr.', 'PhDr.', 'RNDr.', 'doc.', 'Dr.', 'BcA.', 'ICDr.', 'Ing.', 'Ing. arch.', 'JUDr.',
        'Mgr. art.', 'MSDr.', 'PaedDr.', 'PharmDr.', 'PhDr.', 'PhMr.', 'RNDr.', 'RSDr.', 'ThDr.', 'ThLic.', 'prof.', 'Dr. h. c.',
    ];

    private array $suffix = [
        'CSc.', 'DrSc.', 'DSc.', 'Ph.D.', 'Th.D.',
    ];

    public function title($gender = null): string
    {
        return $this->titleMale();
    }

    /**
     * replaced by specific unisex slovakian title
     */
    public function titleMale(): string
    {
        return $this->randomizer->randomElement($this->title);
    }

    /**
     * replaced by specific unisex slovakian title
     */
    public function titleFemale(): string
    {
        return $this->titleMale();
    }

    /**
     * @param string|null $gender 'male', 'female' or null for any
     *
     * @example 'Novotný'
     */
    public function lastName($gender = null): string
    {
        if ($gender === static::GENDER_MALE) {
            return $this->lastNameMale();
        }

        if ($gender === static::GENDER_FEMALE) {
            return $this->lastNameFemale();
        }

        return $this->generator->parse($this->randomizer->randomElement($this->lastNameFormat));
    }

    public function lastNameMale(): string
    {
        return $this->randomizer->randomElement($this->lastNameMale);
    }

    public function lastNameFemale(): string
    {
        return $this->randomizer->randomElement($this->lastNameFemale);
    }

    /**
     * @example 'PhD'
     */
    public function suffix(): string
    {
        return $this->randomizer->randomElement($this->suffix);
    }

    /**
     * Slovak birth number (Rodné číslo)
     *
     * @param string|null $gender 'male', 'female' or null for any
     * @param int         $minAge minimal age of "generated person" in years
     * @param int         $maxAge maximal age of "generated person" in years
     *
     * @return string Slovak birth number
     */
    public function birthNumber($gender = null, $minAge = 0, $maxAge = 100, $slashProbability = 50): string
    {
        if ($gender === null) {
            $gender = $this->generator->boolean() ? static::GENDER_MALE : static::GENDER_FEMALE;
        }

        $startTimestamp = strtotime(sprintf('-%d year', $maxAge));
        $endTimestamp = strtotime(sprintf('-%d year', $minAge));
        $randTimestamp = $this->randomizer->getInt($startTimestamp, $endTimestamp);

        $year = (int) (date('Y', $randTimestamp));
        $month = (int) (date('n', $randTimestamp));
        $day = (int) (date('j', $randTimestamp));
        $suffix = $this->randomizer->getInt(0, 999);

        // women have +50 to month
        if ($gender === static::GENDER_FEMALE) {
            $month += 50;
        }

        $birthNumber = sprintf('%02d%02d%02d%03d', $year % 100, $month, $day, $suffix);

        // from year 1954 birth number includes CRC
        if ($year >= 1954) {
            $crc = intval($birthNumber, 10) % 11;
            if ($crc === 10) {
                $crc = 0;
            }
            $birthNumber .= sprintf('%d', $crc);
        }

        if ($this->generator->boolean($slashProbability)) {
            $birthNumber = substr($birthNumber, 0, 6) . '/' . substr($birthNumber, 6);
        }

        return $birthNumber;
    }

    public function rodneCislo($gender = null, $minAge = 0, $maxAge = 100, $slashProbability = 50): string
    {
        return $this->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    }
}
