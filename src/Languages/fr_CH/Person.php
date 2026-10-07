<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fr_CH;

use DummyGenerator\Core\Person as BasePerson;
use DummyGenerator\Definitions\Calculator\EanCalculatorInterface;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

class Person extends BasePerson
{
    protected array $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{prefix}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}-{{lastName}}',
        '{{firstNameMale}}-{{firstNameMale}} {{lastName}}',
    ];

    protected array $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{prefix}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}-{{lastName}}',
        '{{firstNameFemale}}-{{firstNameFemale}} {{lastName}}',
    ];

    protected array $titleMale = ['M.', 'Dr.', 'Pr.', 'Me.'];

    protected array $titleFemale = ['Mme.', 'Mlle', 'Dr.', 'Pr.', 'Me.'];

    protected array $prefix = ['de', 'de la', 'Le', 'du'];

    public function __construct(
        RandomizerInterface $randomizer,
        GeneratorInterface $generator,
        protected ReplacerInterface $replacer,
        protected EanCalculatorInterface $eanCalculator,
    ) {
        parent::__construct($randomizer, $generator);
    }

    /**
     * @see http://www.bfs.admin.ch/bfs/portal/de/index/themen/01/02/blank/dos/prenoms/02.html
     */
    protected array $firstNameMale = [
        'Adrian', 'Adrien', 'Alain', 'Albert', 'Alberto', 'Alessandro', 'Alex', 'Alexander', 'Alexandre', 'Alexis', 'Alfred', 'Ali', 'Andrea', 'André', 'Angelo', 'Anthony', 'Antoine', 'Antonio', 'António', 'Arnaud', 'Arthur', 'Aurélien', 'Axel',
        'Baptiste', 'Bastien', 'Benjamin', 'Benoît', 'Bernard', 'Bertrand', 'Bruno', 'Bryan',
        'Carlos', 'Charles', 'Christian', 'Christophe', 'Christopher', 'Claude', 'Claudio', 'Cyril', 'Cédric',
        'Damien', 'Daniel', 'David', 'Denis', 'Didier', 'Diego', 'Diogo', 'Dominique', 'Dylan',
        'Emmanuel', 'Enzo', 'Eric', 'Etienne',
        'Fabien', 'Fabio', 'Fabrice', 'Fernando', 'Filipe', 'Florian', 'Francesco', 'Francis', 'Francisco', 'François', 'Frédéric',
        'Gabriel', 'Georges', 'Gilbert', 'Gilles', 'Giovanni', 'Giuseppe', 'Gregory', 'Grégoire', 'Grégory', 'Guillaume', 'Guy', 'Gérald', 'Gérard',
        'Hans', 'Henri', 'Hervé', 'Hugo',
        'Jacques', 'Jean', 'Jean-Claude', 'Jean-Daniel', 'Jean-François', 'Jean-Jacques', 'Jean-Louis', 'Jean-Luc', 'Jean-Marc', 'Jean-Marie', 'Jean-Michel', 'Jean-Paul', 'Jean-Pierre', 'Joao', 'Joaquim', 'John', 'Jonas', 'Jonathan', 'Jorge', 'Jose', 'Joseph', 'José', 'João', 'Joël', 'Juan', 'Julien', 'Jérémie', 'Jérémy', 'Jérôme',
        'Kevin',
        'Laurent', 'Lionel', 'Loris', 'Louis', 'Loïc', 'Luc', 'Luca', 'Lucas', 'Lucien', 'Ludovic', 'Luis', 'Léo',
        'Manuel', 'Marc', 'Marcel', 'Marco', 'Mario', 'Martin', 'Mathias', 'Mathieu', 'Matteo', 'Matthieu', 'Maurice', 'Max', 'Maxime', 'Michael', 'Michaël', 'Michel', 'Miguel', 'Mohamed',
        'Nathan', 'Nicolas', 'Noah', 'Nolan', 'Nuno',
        'Olivier',
        'Pascal', 'Patrice', 'Patrick', 'Paul', 'Paulo', 'Pedro', 'Peter', 'Philippe', 'Pierre', 'Pierre-Alain', 'Pierre-André',
        'Quentin',
        'Rafael', 'Raphaël', 'Raymond', 'René', 'Ricardo', 'Richard', 'Robert', 'Roberto', 'Robin', 'Roger', 'Roland', 'Romain', 'Rui', 'Rémy',
        'Sacha', 'Salvatore', 'Samuel', 'Serge', 'Sergio', 'Simon', 'Steve', 'Stéphane', 'Sylvain', 'Sébastien',
        'Thierry', 'Thomas', 'Théo', 'Tiago',
        'Valentin', 'Victor', 'Vincent', 'Vitor',
        'Walter', 'William', 'Willy',
        'Xavier',
        'Yann', 'Yannick', 'Yvan', 'Yves',
    ];

    /**
     * @see http://www.bfs.admin.ch/bfs/portal/de/index/themen/01/02/blank/dos/prenoms/02.html
     */
    protected array $firstNameFemale = [
        'Agnès', 'Alexandra', 'Alice', 'Alicia', 'Aline', 'Amélie', 'Ana', 'Anaïs', 'Andrea', 'Andrée', 'Angela', 'Anita', 'Anna', 'Anne', 'Anne-Marie', 'Antoinette', 'Ariane', 'Arlette', 'Audrey', 'Aurélie',
        'Barbara', 'Bernadette', 'Brigitte', 'Béatrice',
        'Camille', 'Carine', 'Carla', 'Carmen', 'Carole', 'Caroline', 'Catherine', 'Chantal', 'Charlotte', 'Chloé', 'Christelle', 'Christiane', 'Christine', 'Cindy', 'Claire', 'Clara', 'Claudia', 'Claudine', 'Colette', 'Coralie', 'Corinne', 'Cristina', 'Cécile', 'Célia', 'Céline',
        'Daniela', 'Danielle', 'Danièle', 'Delphine', 'Denise', 'Diana', 'Dominique',
        'Edith', 'Elena', 'Eliane', 'Elisa', 'Elisabeth', 'Elodie', 'Elsa', 'Emilie', 'Emma', 'Erika', 'Estelle', 'Esther', 'Eva', 'Evelyne',
        'Fabienne', 'Fanny', 'Florence', 'Francine', 'Françoise',
        'Gabrielle', 'Geneviève', 'Georgette', 'Ginette', 'Gisèle', 'Géraldine',
        'Huguette', 'Hélène',
        'Inès', 'Irène', 'Isabel', 'Isabelle',
        'Jacqueline', 'Janine', 'Jeanne', 'Jeannine', 'Jennifer', 'Jessica', 'Joana', 'Jocelyne', 'Josette', 'Josiane', 'Joëlle', 'Julia', 'Julie', 'Juliette', 'Justine',
        'Karin', 'Karine', 'Katia',
        'Laetitia', 'Lara', 'Laura', 'Laure', 'Laurence', 'Liliane', 'Lisa', 'Louise', 'Lucia', 'Lucie', 'Léa',
        'Madeleine', 'Magali', 'Manon', 'Manuela', 'Marguerite', 'Maria', 'Marianne', 'Marie', 'Marie-Thérèse', 'Marina', 'Marine', 'Marion', 'Marlyse', 'Marlène', 'Martine', 'Mathilde', 'Melissa', 'Micheline', 'Michelle', 'Michèle', 'Mireille', 'Monica', 'Monique', 'Morgane', 'Muriel', 'Myriam', 'Mélanie',
        'Nadia', 'Nadine', 'Natacha', 'Nathalie', 'Nelly', 'Nicole', 'Nina', 'Noémie',
        'Océane', 'Olga', 'Olivia',
        'Pascale', 'Patricia', 'Paula', 'Pauline', 'Pierrette',
        'Rachel', 'Raymonde', 'Renée', 'Rita', 'Rosa', 'Rose', 'Rose-Marie', 'Ruth',
        'Sabine', 'Sabrina', 'Sandra', 'Sandrine', 'Sara', 'Sarah', 'Silvia', 'Simone', 'Sofia', 'Sonia', 'Sophie', 'Stéphanie', 'Suzanne', 'Sylvia', 'Sylviane', 'Sylvie', 'Séverine',
        'Tania', 'Tatiana', 'Teresa', 'Thérèse',
        'Valentine', 'Valérie', 'Vanessa', 'Victoria', 'Virginie', 'Viviane', 'Véronique',
        'Yolande', 'Yvette', 'Yvonne',
        'Zoé',
    ];

    /**
     * @see http://blog.tagesanzeiger.ch/datenblog/index.php/6859
     */
    protected array $lastName = [
        'Aebischer', 'Aeby', 'Andrey', 'Aubert', 'Aubry',
        'Bachmann', 'Baechler', 'Baeriswyl', 'Barbey', 'Barras', 'Baumann', 'Baumgartner', 'Berger', 'Bernard', 'Berset', 'Bersier', 'Berthoud', 'Besson', 'Blanc', 'Blaser', 'Boillat', 'Bonvin', 'Bourquin', 'Bruchez', 'Brunner', 'Brügger', 'Buchs', 'Bugnon', 'Burri', 'Bühler',
        'Castella', 'Cattin', 'Chappuis', 'Chapuis', 'Chassot', 'Chatelain', 'Chevalley', 'Chollet', 'Christen', 'Clerc', 'Clément', 'Constantin', 'Crausaz',
        'Da Silva', 'Darbellay', 'Demierre', 'dos Santos', 'Droz', 'Dubois', 'Dubuis', 'Duc', 'Dévaud',
        'Egger', 'Emery',
        'Fasel', 'Favre', 'Fellay', 'Fernandes', 'Fernandez', 'Ferreira', 'Fischer', 'Fleury', 'Flückiger', 'Fournier', 'Fragnière', 'Froidevaux',
        'Gaillard', 'Garcia', 'Gasser', 'Gay', 'Geiser', 'Genoud', 'Gerber', 'Gilliéron', 'Girard', 'Girardin', 'Giroud', 'Glauser', 'Golay', 'Gonzalez', 'Graf', 'Grand', 'Grandjean', 'Gremaud', 'Grosjean', 'Gross', 'Guex', 'Guignard',
        'Hofer', 'Hofmann', 'Huber', 'Huguenin', 'Héritier',
        'Jaccard', 'Jacot', 'Jaquet', 'Jaquier', 'Jeanneret', 'Jordan', 'Jungo', 'Junod',
        'Kaufmann', 'Keller', 'Kohler', 'Kolly', 'Kunz',
        'Lachat', 'Lambert', 'Lehmann', 'Leuba', 'Leuenberger', 'Liechti', 'Lopez', 'Lüthi',
        'Maeder', 'Magnin', 'Maillard', 'Maret', 'Marti', 'Martin', 'Martinez', 'Matthey', 'Maurer', 'Mauron', 'Mayor', 'Meier', 'Meyer', 'Meylan', 'Michaud', 'Michel', 'Monnet', 'Monney', 'Monnier', 'Morand', 'Morard', 'Morel', 'Moret', 'Moser', 'Muller', 'Müller',
        'Neuhaus', 'Nguyen', 'Nicolet',
        'Oberson',
        'Pache', 'Pasche', 'Pasquier', 'Pereira', 'Perez', 'Perrenoud', 'Perret', 'Perrin', 'Perroud', 'Pfister', 'Piguet', 'Piller', 'Pilloud', 'Pittet', 'Pochon',
        'Racine', 'Rey', 'Reymond', 'Richard', 'Robert', 'Rochat', 'Rodrigues', 'Rodriguez', 'Roduit', 'Rosset', 'Rossier', 'Roth', 'Rouiller', 'Roulin', 'Roy', 'Ruffieux',
        'Savary', 'Schaller', 'Schmid', 'Schmidt', 'Schmutz', 'Schneider', 'Schwab', 'Seydoux', 'Simon', 'Stalder', 'Stauffer', 'Steiner', 'Studer', 'Suter',
        'Tissot',
        'Vaucher', 'Vonlanthen', 'Vuilleumier',
        'Waeber', 'Weber', 'Wenger', 'Widmer', 'Wyss',
        'Zbinden', 'Zimmermann',
    ];

    /**
     * Generates a valid random AVS13 (swiss social security) number
     *
     * This function will generate a valid random AVS13 number and return it
     * as a formatted string.
     *
     * @see https://www.zas.admin.ch/zas/fr/home/partenaires-et-institutions-/navs13.html
     *
     * @return string
     */
    public function avs13(): string
    {
        $p = [
            756,
            $this->replacer->numerify('####'),
            $this->replacer->numerify('####'),
            $this->replacer->numerify('#'),
        ];

        $checksum = $this->eanCalculator->checksum(implode('', $p));

        return sprintf('%s.%s.%s.%s%s', $p[0], $p[1], $p[2], $p[3], $checksum);
    }

    public function prefix(): string
    {
        return $this->randomizer->randomElement($this->prefix);
    }

    /**
     * Generates a NIR / Sécurité Sociale number (13 digits + 2 digits for the key)
     *
     * @see https://fr.wikipedia.org/wiki/Num%C3%A9ro_de_s%C3%A9curit%C3%A9_sociale_en_France
     *
     * @return string
     */
    public function nir($gender = null, $formatted = false)
    {
        // Gender
        if ($gender === static::GENDER_MALE) {
            $nir = 1;
        } elseif ($gender === static::GENDER_FEMALE) {
            $nir = 2;
        } else {
            $nir = $this->randomizer->getInt(1, 2);
        }

        $nir .=
            // Year of birth (aa)
            $this->replacer->numerify('##') .
            // Mont of birth (mm)
            sprintf('%02d', $this->randomizer->getInt(1, 12));

        // Department
        $department = (string) key($this->generator->department());
        $nir .= $department;

        // Town number, depends on department length
        if (strlen($department) === 2) {
            $nir .= $this->replacer->numerify('###');
        } elseif (strlen($department) === 3) {
            $nir .= $this->replacer->numerify('##');
        }

        // Born number (depending of town and month of birth)
        $nir .= $this->replacer->numerify('###');

        /**
         * The key for a given NIR is `97 - 97 % NIR`
         * NIR has to be an integer, so we have to do a little replacment
         * for departments 2A and 2B
         */
        if ($department === '2A') {
            $nirInteger = str_replace('2A', '19', $nir);
        } elseif ($department === '2B') {
            $nirInteger = str_replace('2B', '18', $nir);
        } else {
            $nirInteger = $nir;
        }
        $nir .= sprintf('%02d', 97 - $nirInteger % 97);

        // Format is x xx xx xx xxx xxx xx
        if ($formatted) {
            $nir = substr($nir, 0, 1) . ' ' . substr($nir, 1, 2) . ' ' . substr($nir, 3, 2) . ' ' . substr($nir, 5, 2) . ' ' . substr($nir, 7, 3) . ' ' . substr($nir, 10, 3) . ' ' . substr($nir, 13, 2);
        }

        return $nir;
    }
}
