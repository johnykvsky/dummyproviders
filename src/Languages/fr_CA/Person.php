<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fr_CA;

use DummyGenerator\Core\Person as BasePerson;
use DummyGenerator\Definitions\Calculator\LuhnCalculatorInterface;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

class Person extends BasePerson
{
    public function __construct(
        RandomizerInterface $randomizer,
        GeneratorInterface $generator,
        protected ReplacerInterface $replacer,
        protected LuhnCalculatorInterface $luhnCalculator,
    ) {
        parent::__construct($randomizer, $generator);
    }
    protected array $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}-{{lastName}}',
        '{{firstNameMale}}-{{firstNameMale}} {{lastName}}',
    ];

    protected array $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}-{{lastName}}',
        '{{firstNameFemale}}-{{firstNameFemale}} {{lastName}}',
    ];

    /**
     * This list is more or less the same as in \Faker\Provider\fr_FR\Person.php
     * Some common names were added and other removed.
     */
    protected array $firstNameMale = [
        'Adrien', 'Aimé', 'Alain', 'Albert', 'Alexandre', 'Alfred', 'Alphonse', 'Alysson', 'André', 'Anthony', 'Antoine', 'Arthur', 'Auguste',
        'Augustin', 'Augustine', 'Benjamin', 'Benoit', 'Benoît', 'Bernard', 'Bertrand', 'Charles', 'Christian', 'Christophe', 'Claude', 'Daniel',
        'David', 'Denis', 'Dominic', 'Emmanuel', 'Eugène', 'Françis', 'François', 'Frédéric', 'Gabriel', 'Georges', 'Gilbert', 'Gilles',
        'Grégory', 'Guillaume', 'Guy', 'Gérard', 'Henri', 'Hugues', 'Isaac', 'Jacques', 'Joseph', 'Jules', 'Julien', 'Jérôme',
        'Laurent', 'Louis', 'Luc', 'Lucas', 'Léon', 'Marc', 'Marcel', 'Martin', 'Mathieu', 'Matthieu', 'Maurice', 'Michel',
        'Nicolas', 'Noël', 'Olivier', 'Patrick', 'Paul', 'Philippe', 'Pierre', 'Raymond', 'René', 'Richard', 'Robert', 'Roger',
        'Roland', 'Rémy', 'Simone', 'Stéphane', 'Sébastien', 'Thierry', 'Thomas', 'Théo', 'Théophile', 'Timothée', 'Tristan', 'Victor',
        'Vincent', 'William', 'Xavier', 'Yvan', 'Yves', 'Yvon', 'Zacharie', 'Édouard', 'Émanuelle', 'Émile', 'Éric', 'Étienne', 'Honoré',
    ];

    protected array $firstNameFemale = [
        'Adrienne', 'Adèle', 'Agathe', 'Aimée', 'Alexandra', 'Alice', 'Aline', 'Amélie', 'Anaïs', 'Andrée', 'Ann', 'Anne', 'Annette',
        'Annie', 'Anouk', 'Arianne', 'Audrey', 'Aurore', 'Aurélie', 'Bernadette', 'Brigitte', 'Camille', 'Caroline', 'Catherine', 'Chantal',
        'Charlotte', 'Christiane', 'Christine', 'Claire', 'Claudine', 'Colette', 'Corrine', 'Cécile', 'Céline', 'Danielle', 'Denise', 'Dominique',
        'Eugénie', 'Eve', 'Françoise', 'Frédérique', 'Gabrielle', 'Geneviève', 'Hélène', 'Isabelle', 'Jacqueline', 'Jean', 'Jeanne', 'Jeannine',
        'Joséphine', 'Julie', 'Laurence', 'Louise', 'Luce', 'Lucie', 'Madeleine', 'Maggie', 'Manon', 'Margot', 'Marguerite', 'Marianne',
        'Marie', 'Marthe', 'Martine', 'Maryse', 'Mathilde', 'Michelle', 'Michèle', 'Monique', 'Nancy', 'Nathalie', 'Nicole', 'Noémie',
        'Odette', 'Olivia', 'Patrice', 'Patricia', 'Paule', 'Paulette', 'Pauline', 'Pénélope', 'Renée', 'Rolande', 'Sophie', 'Stéphanie',
        'Susanne', 'Suzanne', 'Sylvie', 'Thérèse', 'Valérie', 'Virginie', 'Véronique', 'Yvonne', 'Zoé', 'Édith', 'Élisabeth', 'Élise',
        'Élodie', 'Émilie', 'Érika', 'Honorée',
    ];

    /**
     * These last names come from this list of most common family names in Québec (1 to 130)
     * http://fr.wikipedia.org/wiki/Liste_des_noms_de_famille_les_plus_courants_au_Québec
     */
    protected array $lastName = [
        'Allard', 'Arsenault', 'Audet',
        'Beaudoin', 'Beaulieu', 'Bédard', 'Bélanger', 'Benoît', 'Bergeron', 'Bernard', 'Bernier', 'Bertrand', 'Bérubé',
        'Bilodeau', 'Blais', 'Blanchette', 'Boisvert', 'Boivin', 'Bolduc', 'Bouchard', 'Boucher', 'Boudreau',
        'Caron', 'Carrier', 'Champagne', 'Charbonneau', 'Cloutier', 'Côté', 'Couture', 'Cyr',
        'Demers', 'Deschênes', 'Desjardins', 'Desrosiers', 'Dion', 'Dionne', 'Drouin', 'Dubé', 'Dubois', 'Dufour', 'Dupuis',
        'Fillion', 'Fontaine', 'Fortier', 'Fortin', 'Fournier',
        'Gagné', 'Gagnon', 'Gaudreault', 'Gauthier', 'Giguère', 'Gilbert', 'Gingras', 'Girard', 'Giroux', 'Goulet',
        'Gosselin', 'Gravel', 'Grenier', 'Guay',
        'Hamel', 'Harvey', 'Hébert', 'Houle',
        'Jean', 'Jacques',
        'Labelle', 'Lachance', 'Lacroix', 'Lalonde', 'Lambert', 'Landry', 'Langlois', 'Lapierre', 'Lapointe', 'Larouche',
        'Lauzon', 'Lavoie', 'Leblanc', 'Leduc', 'Leclerc', 'Lefebvre', 'Legault', 'Lemay', 'Lemieux', 'Lepage', 'Lessard',
        'Lévesque',
        'Martel', 'Martin', 'Ménard', 'Mercier', 'Michaud', 'Moreau', 'Morin',
        'Nadeau', 'Nguyen',
        'Ouellet',
        'Paquette', 'Paradis', 'Parent', 'Pelletier', 'Perreault', 'Perron', 'Picard', 'Plante', 'Poirier', 'Poulin',
        'Proulx',
        'Raymond', 'Renaud', 'Richard', 'Rioux', 'Robert', 'Rousseau', 'Roy',
        'Savard', 'Simard', 'St-Pierre',
        'Tardif', 'Tessier', 'Thériault', 'Therrien', 'Thibault', 'Tremblay', 'Trudel', 'Turcotte',
        'Vachon', 'Vaillancourt', 'Villeneuve',
    ];

    /**
     * Canadian Social Insurance Number (SIN / NAS - Numéro d'assurance sociale)
     *
     * 9 digits with Luhn checksum
     *
     * @see https://en.wikipedia.org/wiki/Social_Insurance_Number
     */
    public function sin(bool $formatted = false): string
    {
        $first = $this->randomizer->randomElement([1, 2, 3, 4, 5, 6, 7, 9]);
        $digits = (string) $first . $this->replacer->numerify('#######');
        $check = $this->luhnCalculator->computeCheckDigit($digits);
        $sin = $digits . $check;

        if ($formatted) {
            return sprintf('%s %s %s', substr($sin, 0, 3), substr($sin, 3, 3), substr($sin, 6, 3));
        }

        return $sin;
    }

    public function nas(bool $formatted = false): string
    {
        return $this->sin($formatted);
    }
}
