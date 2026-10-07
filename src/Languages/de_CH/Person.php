<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\de_CH;

use DummyGenerator\Core\Person as BasePerson;

class Person extends BasePerson
{
    protected array $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}-{{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
    ];

    protected array $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}-{{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
    ];

    protected array $titleMale = ['Herr', 'Herr Dr.', 'Herr Prof.', 'Herr Prof. Dr.'];

    protected array $titleFemale = ['Frau', 'Frau Dr.', 'Frau Prof.', 'Frau Prof. Dr.'];

    protected array $suffix = ['B.Sc.', 'B.A.', 'B.Eng.', 'MBA.'];

    /**
     * @see http://www.bfs.admin.ch/bfs/portal/de/index/themen/01/02/blank/dos/prenoms/02.html
     */
    protected array $firstNameMale = [
        'Adrian', 'Alain', 'Albert', 'Alessandro', 'Alex', 'Alexander', 'Alfred', 'Ali', 'Alois', 'Andrea', 'Andreas', 'Andrin', 'André', 'Angelo', 'Anton', 'Antonio', 'Armin', 'Arnold', 'Arthur',
        'Beat', 'Benjamin', 'Bernhard', 'Bruno',
        'Carlo', 'Carlos', 'Christian', 'Christoph', 'Claudio', 'Cyrill', 'Cédric',
        'Damian', 'Daniel', 'Dario', 'David', 'Denis', 'Diego', 'Dieter', 'Dominic', 'Dominik',
        'Eduard', 'Elia', 'Elias', 'Emil', 'Eric', 'Erich', 'Ernst', 'Erwin', 'Eugen',
        'Fabian', 'Fabio', 'Felix', 'Flavio', 'Florian', 'Francesco', 'Frank', 'Franz', 'Friedrich', 'Fritz',
        'Gabriel', 'Georg', 'Gerhard', 'Gian', 'Giovanni', 'Giuseppe', 'Guido',
        'Hans', 'Hans-Peter', 'Hanspeter', 'Heinrich', 'Heinz', 'Herbert', 'Hermann', 'Hugo',
        'Ivan', 'Ivo',
        'Jakob', 'Jan', 'Jean', 'Joel', 'Johann', 'Johannes', 'Jonas', 'Jonathan', 'Josef', 'José', 'Joël', 'Julian', 'Jörg', 'Jürg', 'Jürgen',
        'Karl', 'Kevin', 'Kilian', 'Klaus', 'Konrad', 'Kurt',
        'Lars', 'Leandro', 'Leo', 'Leon', 'Levin', 'Livio', 'Lorenz', 'Loris', 'Louis', 'Luca', 'Luigi', 'Luis', 'Lukas',
        'Manfred', 'Manuel', 'Marc', 'Marcel', 'Marco', 'Mario', 'Mark', 'Marko', 'Markus', 'Martin', 'Mathias', 'Matteo', 'Matthias', 'Mauro', 'Max', 'Mehmet', 'Michael', 'Michel', 'Michele', 'Mike', 'Moritz',
        'Nico', 'Nicola', 'Nicolas', 'Niklaus', 'Nils', 'Noah', 'Norbert',
        'Oliver', 'Olivier', 'Othmar', 'Otto',
        'Pascal', 'Patrick', 'Patrik', 'Paul', 'Peter', 'Philip', 'Philipp', 'Philippe', 'Pius',
        'Rafael', 'Rainer', 'Ralf', 'Ralph', 'Ramon', 'Raphael', 'Remo', 'Renato', 'René', 'Reto', 'Richard', 'Robert', 'Roberto', 'Robin', 'Roger', 'Roland', 'Rolf', 'Roman', 'Rudolf',
        'Salvatore', 'Samuel', 'Sandro', 'Sascha', 'Sebastian', 'Severin', 'Silvan', 'Silvio', 'Simon', 'Stefan', 'Stephan', 'Sven',
        'Theodor', 'Thomas', 'Tim', 'Timo', 'Tobias',
        'Ulrich', 'Urs',
        'Walter', 'Werner', 'Wilhelm', 'Willi', 'Willy', 'Wolfgang',
        'Yannick', 'Yves',
    ];

    /**
     * @see http://www.bfs.admin.ch/bfs/portal/de/index/themen/01/02/blank/dos/prenoms/02.html
     */
    protected array $firstNameFemale = [
        'Adelheid', 'Agnes', 'Alessia', 'Alexandra', 'Alice', 'Alina', 'Aline', 'Ana', 'Andrea', 'Angela', 'Angelika', 'Anita', 'Anja', 'Anna', 'Annemarie', 'Antonia', 'Astrid',
        'Barbara', 'Beatrice', 'Beatrix', 'Bernadette', 'Bertha', 'Bettina', 'Brigitta', 'Brigitte',
        'Carla', 'Carmen', 'Caroline', 'Chantal', 'Charlotte', 'Chiara', 'Christa', 'Christina', 'Christine', 'Claudia', 'Corina', 'Corinne', 'Cornelia', 'Céline',
        'Daniela', 'Deborah', 'Denise', 'Diana', 'Dora', 'Doris', 'Dorothea',
        'Edith', 'Elena', 'Eliane', 'Elisabeth', 'Elsa', 'Elsbeth', 'Emma', 'Erika', 'Erna', 'Esther', 'Eva', 'Eveline',
        'Fabienne', 'Fiona', 'Franziska', 'Frieda',
        'Gabriela', 'Gabriele', 'Gertrud', 'Gisela',
        'Hanna', 'Hedwig', 'Heidi', 'Helena', 'Helene', 'Hildegard',
        'Ida', 'Ingrid', 'Irene', 'Iris', 'Irma', 'Isabel', 'Isabella', 'Isabelle',
        'Jacqueline', 'Jana', 'Janine', 'Jasmin', 'Jeannette', 'Jennifer', 'Jessica', 'Johanna', 'Jolanda', 'Judith', 'Julia',
        'Karin', 'Katharina', 'Kathrin', 'Katja', 'Katrin', 'Klara',
        'Lara', 'Larissa', 'Laura', 'Lea', 'Lena', 'Leonie', 'Lina', 'Linda', 'Lisa', 'Liselotte', 'Livia', 'Lorena', 'Luana', 'Lucia', 'Luzia', 'Lydia',
        'Madeleine', 'Magdalena', 'Maja', 'Manuela', 'Mara', 'Margareta', 'Margaretha', 'Margaritha', 'Margrit', 'Margrith', 'Maria', 'Marianna', 'Marianne', 'Marie', 'Marina', 'Marion', 'Marlise', 'Martha', 'Martina', 'Melanie', 'Mia', 'Michaela', 'Michelle', 'Michèle', 'Milena', 'Miriam', 'Mirjam', 'Monica', 'Monika',
        'Nadia', 'Nadine', 'Nadja', 'Natalie', 'Nathalie', 'Nelly', 'Nicole', 'Nina', 'Noemi', 'Nora',
        'Patricia', 'Patrizia', 'Paula', 'Petra', 'Pia', 'Priska',
        'Rahel', 'Ramona', 'Rebecca', 'Regina', 'Regula', 'Renata', 'Renate', 'Rita', 'Rosa', 'Rosmarie', 'Ruth',
        'Sabine', 'Sabrina', 'Sandra', 'Sara', 'Sarah', 'Selina', 'Seraina', 'Sibylle', 'Silvia', 'Simone', 'Sina', 'Sonja', 'Sophie', 'Stefanie', 'Stephanie', 'Susanna', 'Susanne', 'Sylvia',
        'Tamara', 'Tanja', 'Therese', 'Theresia',
        'Ursula',
        'Valentina', 'Vanessa', 'Vera', 'Verena', 'Veronika',
        'Yvonne',
    ];

    /**
     * @see http://blog.tagesanzeiger.ch/datenblog/index.php/6859
     */
    protected array $lastName = [
        'Achermann', 'Ackermann', 'Aeschlimann', 'Ammann', 'Arnold',
        'Bachmann', 'Baumann', 'Baumgartner', 'Beck', 'Benz', 'Berger', 'Betschart', 'Bieri', 'Bischof', 'Blaser', 'Blum', 'Bolliger', 'Bosshard', 'Brunner', 'Bucher', 'Burri', 'Bärtschi', 'Bösch', 'Bühler', 'Bühlmann', 'Bürgi', 'Bürki',
        'Christen',
        'Eberle', 'Egger', 'Egli', 'Eichenberger', 'Erni', 'Eugster',
        'Fankhauser', 'Fehr', 'Fischer', 'Flury', 'Flückiger', 'Frei', 'Frey', 'Friedli', 'Frischknecht', 'Fuchs', 'Furrer', 'Fässler',
        'Gasser', 'Gerber', 'Giger', 'Gisler', 'Gloor', 'Graber', 'Graf', 'Grob', 'Gut',
        'Haas', 'Haller', 'Hartmann', 'Hasler', 'Hauser', 'Heiniger', 'Herzog', 'Hess', 'Hofer', 'Hofmann', 'Hofstetter', 'Hostettler', 'Huber', 'Hug', 'Hunziker', 'Häfliger', 'Hänni', 'Hürlimann',
        'Imhof', 'Iten',
        'Jenni', 'Jost', 'Jäggi',
        'Kaiser', 'Kaufmann', 'Keller', 'Kessler', 'Knecht', 'Koch', 'Kohler', 'Koller', 'Krebs', 'Kuhn', 'Kunz', 'Kuster', 'Kälin', 'Käser', 'Küng',
        'Lang', 'Lanz', 'Lehmann', 'Leuenberger', 'Liechti', 'Locher', 'Lutz', 'Lüscher', 'Lüthi',
        'Marti', 'Marty', 'Mathis', 'Mathys', 'Maurer', 'Meier', 'Meister', 'Merz', 'Mettler', 'Meyer', 'Michel', 'Moser', 'Mäder', 'Müller',
        'Niederberger', 'Nussbaumer', 'Näf',
        'Odermatt', 'Ott',
        'Peter', 'Pfister', 'Portmann', 'Probst',
        'Reber', 'Rohner', 'Rohrer', 'Roth', 'Röthlisberger', 'Rüegg',
        'Schaub', 'Scheidegger', 'Schenk', 'Scherrer', 'Schmid', 'Schmidt', 'Schneider', 'Schnyder', 'Schuler', 'Schumacher', 'Schwab', 'Schwarz', 'Schweizer', 'Schär', 'Schärer', 'Schüpbach', 'Schütz', 'Seiler', 'Senn', 'Sieber', 'Siegenthaler', 'Siegrist', 'Sigrist', 'Sommer', 'Stadelmann', 'Stalder', 'Staub', 'Steffen', 'Steiger', 'Steiner', 'Steinmann', 'Stettler', 'Stocker', 'Stucki', 'Studer', 'Stutz', 'Stöckli', 'Suter', 'Sutter',
        'Tanner', 'Tobler', 'Trachsel',
        'Ulrich',
        'Vogel', 'Vogt',
        'Wagner', 'Walker', 'Walser', 'Weber', 'Wehrli', 'Weibel', 'Weiss', 'Wenger', 'Wicki', 'Widmer', 'Willi', 'Wirth', 'Wirz', 'Wittwer', 'Wolf', 'Wyss', 'Wüthrich',
        'Zaugg', 'Zbinden', 'Zehnder', 'Ziegler', 'Zimmermann', 'Zwahlen', 'Zürcher',
    ];

    /**
     * Generates a valid random AVS13 / AHV13 (swiss social security) number
     *
     * @see https://www.zas.admin.ch/zas/fr/home/partenaires-et-institutions-/navs13.html
     */
    public function ahv13(): string
    {
        return $this->avs13();
    }

    public function avs13(): string
    {
        $p = [
            756,
            $this->generator->numerify('####'),
            $this->generator->numerify('####'),
            $this->generator->numerify('#'),
        ];

        $checksum = $this->eanChecksum(implode('', $p));

        return sprintf('%s.%s.%s.%s%s', $p[0], $p[1], $p[2], $p[3], $checksum);
    }

    private function eanChecksum(string $digits): int
    {
        $sequence = (strlen($digits) + 1) === 8 ? [3, 1] : [1, 3];
        $sums = 0;

        foreach (str_split($digits) as $n => $digit) {
            $sums += ((int) $digit) * $sequence[$n % 2];
        }

        return (10 - $sums % 10) % 10;
    }

    /**
     * @example 'PhD'
     */
    public function suffix(): string
    {
        return $this->randomizer->randomElement($this->suffix);
    }
}
