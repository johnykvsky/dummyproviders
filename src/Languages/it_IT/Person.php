<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\it_IT;

use DummyGenerator\Core\Person as BasePerson;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

class Person extends BasePerson
{
    public function __construct(
        RandomizerInterface $randomizer,
        GeneratorInterface $generator,
        protected ReplacerInterface $replacer,
    ) {
        parent::__construct($randomizer, $generator);
    }

    protected array $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    ];

    protected array $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    ];

    protected array $firstNameMale = [
        'Aaron', 'Abramo', 'Adriano', 'Akira', 'Alan', 'Alberto', 'Albino', 'Alessandro', 'Alessio', 'Amedeo', 'Amos', 'Anastasio', 'Anselmo',
        'Antimo', 'Antonino', 'Antonio', 'Ariel', 'Armando', 'Aroldo', 'Arturo', 'Augusto', 'Battista', 'Bernardo', 'Boris', 'Caio',
        'Carlo', 'Carmelo', 'Ciro', 'Damiano', 'Danny', 'Dante', 'Davide', 'Davis', 'Demis', 'Dimitri', 'Domingo', 'Dylan',
        'Edilio', 'Egidio', 'Elio', 'Emanuel', 'Emidio', 'Enrico', 'Enzo', 'Ercole', 'Ermes', 'Ethan', 'Ettore', 'Eusebio',
        'Fabiano', 'Fabio', 'Ferdinando', 'Fernando', 'Fiorenzo', 'Flavio', 'Folco', 'Fulvio', 'Furio', 'Gabriele', 'Gaetano', 'Gastone',
        'Gavino', 'Gerlando', 'Germano', 'Giacinto', 'Gianantonio', 'Giancarlo', 'Gianmarco', 'Gianmaria', 'Gioacchino', 'Giordano', 'Giorgio', 'Giuliano',
        'Giulio', 'Graziano', 'Gregorio', 'Guido', 'Harry', 'Hector', 'Iacopo', 'Ian', 'Ilario', 'Italo', 'Ivano', 'Jack',
        'Jacopo', 'Jari', 'Jarno', 'Joey', 'Joseph', 'Joshua', 'Kai', 'Karim', 'Kris', 'Lamberto', 'Lauro', 'Lazzaro',
        'Leonardo', 'Liborio', 'Lino', 'Lorenzo', 'Loris', 'Ludovico', 'Luigi', 'Manfredi', 'Manuele', 'Marco', 'Mariano', 'Marino',
        'Marvin', 'Marzio', 'Matteo', 'Mattia', 'Mauro', 'Max', 'Michael', 'Mirco', 'Mirko', 'Modesto', 'Moreno', 'Nabil',
        'Nadir', 'Nathan', 'Nazzareno', 'Nick', 'Nico', 'Noah', 'Noel', 'Omar', 'Oreste', 'Osvaldo', 'Pablo', 'Patrizio',
        'Pietro', 'Priamo', 'Quirino', 'Raoul', 'Renato', 'Renzo', 'Rocco', 'Rodolfo', 'Romeo', 'Romolo', 'Rudy', 'Sabatino',
        'Sabino', 'Samuel', 'Sandro', 'Santo', 'Sebastian', 'Sesto', 'Silvano', 'Silverio', 'Sirio', 'Siro', 'Timoteo', 'Timothy',
        'Tommaso', 'Ubaldo', 'Umberto', 'Vinicio', 'Walter', 'Xavier', 'Yago', 'Alighieri', 'Alighiero', 'Amerigo', 'Arcibaldo', 'Arduino',
        'Artes', 'Audenico', 'Ausonio', 'Bacchisio', 'Baldassarre', 'Bettino', 'Bortolo', 'Caligola', 'Cecco', 'Cirino', 'Cleros',
        'Costantino', 'Costanzo', 'Danthon', 'Demian', 'Domiziano', 'Edipo', 'Egisto', 'Eliziario', 'Eriberto', 'Erminio',
        'Eustachio', 'Evangelista', 'Fiorentino', 'Giacobbe', 'Gianleonardo', 'Gianriccardo', 'Giobbe', 'Ippolito',
        'Isira', 'Joannes', 'Kociss', 'Laerte', 'Maggiore', 'Muzio', 'Nestore', 'Odino', 'Odone', 'Olo', 'Oretta', 'Orfeo',
        'Osea', 'Pacifico', 'Pericle', 'Piererminio', 'Pierfrancesco', 'Piersilvio', 'Primo', 'Quarto', 'Quasimodo',
        'Radames', 'Radio', 'Raniero', 'Rosalino', 'Rosolino', 'Rufo', 'Secondo', 'Tancredi', 'Tazio', 'Terzo', 'Teseo',
        'Tolomeo', 'Trevis', 'Tristano', 'Ulrico', 'Valdo', 'Zaccaria', 'Dindo', 'Serse', 'Gioele', 'Giovanni',
    ];

    protected array $firstNameFemale = [
        'Assia', 'Benedetta', 'Bibiana', 'Brigitta', 'Carmela', 'Celeste', 'Cira', 'Claudia', 'Concetta', 'Cristyn', 'Deborah', 'Demi', 'Diana',
        'Donatella', 'Doriana', 'Edvige', 'Elda', 'Elga', 'Elsa', 'Emilia', 'Enrica', 'Erminia', 'Evita', 'Fatima', 'Felicia',
        'Filomena', 'Fortunata', 'Gilda', 'Giovanna', 'Giulietta', 'Grazia', 'Helga', 'Ileana', 'Ingrid', 'Ione', 'Irene', 'Isabel',
        'Ivonne', 'Jelena', 'Kayla', 'Kristel', 'Laura', 'Leone', 'Lia', 'Lidia', 'Lisa', 'Loredana', 'Loretta', 'Luce',
        'Lucia', 'Lucrezia', 'Luna', 'Maika', 'Marcella', 'Maria', 'Marianita', 'Mariapia', 'Marina', 'Maristella', 'Maruska', 'Matilde',
        'Mercedes', 'Michele', 'Miriam', 'Miriana', 'Monia', 'Morgana', 'Naomi', 'Neri', 'Nicoletta', 'Ninfa', 'Noemi', 'Nunzia',
        'Olimpia', 'Ortensia', 'Penelope', 'Prisca', 'Rebecca', 'Rita', 'Rosalba', 'Rosaria', 'Rosita', 'Ruth', 'Samira', 'Sarita',
        'Sasha', 'Shaira', 'Thea', 'Ursula', 'Vania', 'Vera', 'Vienna', 'Artemide', 'Cassiopea', 'Cesidia', 'Clea', 'Cleopatra',
        'Clodovea', 'Cosetta', 'Damiana', 'Danuta', 'Diamante', 'Eufemia', 'Flaviana', 'Gelsomina', 'Genziana', 'Giacinta', 'Guendalina',
        'Jole', 'Mariagiulia', 'Marieva', 'Mietta', 'Nayade', 'Piccarda', 'Selvaggia', 'Sibilla', 'Soriana', 'Sue ellen', 'Tosca', 'Violante',
        'Vitalba', 'Zelida',
    ];

    protected array $lastName = [
        'Rossi', 'Russo', 'Ferrari', 'Esposito', 'Bianchi', 'Romano', 'Colombo', 'Ricci', 'Marino', 'Greco', 'Bruno', 'Gallo', 'Conti',
        'De luca', 'Mancini', 'Costa', 'Giordano', 'Rizzo', 'Lombardi', 'Moretti', 'Barbieri', 'Fontana', 'Santoro', 'Mariani',
        'Rinaldi', 'Caruso', 'Ferrara', 'Galli', 'Martini', 'Leone', 'Longo', 'Gentile', 'Martinelli', 'Vitale', 'Lombardo', 'Serra',
        'Coppola', 'De Santis', 'D\'angelo', 'Marchetti', 'Parisi', 'Villa', 'Conte', 'Ferraro', 'Ferri', 'Fabbri', 'Bianco',
        'Marini', 'Grasso', 'Valentini', 'Messina', 'Sala', 'De Angelis', 'Gatti', 'Pellegrini', 'Palumbo', 'Sanna', 'Farina',
        'Rizzi', 'Monti', 'Cattaneo', 'Morelli', 'Amato', 'Silvestri', 'Mazza', 'Testa', 'Grassi', 'Pellegrino', 'Carbone',
        'Giuliani', 'Benedetti', 'Barone', 'Rossetti', 'Caputo', 'Montanari', 'Guerra', 'Palmieri', 'Bernardi', 'Martino', 'Fiore',
        'De rosa', 'Ferretti', 'Bellini', 'Basile', 'Riva', 'Donati', 'Piras', 'Vitali', 'Battaglia', 'Sartori', 'Neri', 'Costantini',
        'Milani', 'Pagano', 'Ruggiero', 'Sorrentino', 'D\'amico', 'Orlando', 'Damico', 'Negri',
    ];

    protected array $titleMale = ['Sig.', 'Dott.', 'Dr.', 'Ing.'];

    protected array $titleFemale = ['Sig.ra', 'Dott.', 'Dr.', 'Ing.'];

    private array $suffix = [];

    /** @example 'PhD' */
    public function suffix(): string
    {
        return $this->randomizer->randomElement($this->suffix);
    }

    private const MONTH_CODES = ['A', 'B', 'C', 'D', 'E', 'H', 'L', 'M', 'P', 'R', 'S', 'T'];

    private const CHECKSUM_ODD_VALUES = [
        '0' => 1, '1' => 0, '2' => 5, '3' => 7, '4' => 9, '5' => 13, '6' => 15, '7' => 17, '8' => 19, '9' => 21,
        'A' => 1, 'B' => 0, 'C' => 5, 'D' => 7, 'E' => 9, 'F' => 13, 'G' => 15, 'H' => 17, 'I' => 19, 'J' => 21,
        'K' => 2, 'L' => 4, 'M' => 18, 'N' => 20, 'O' => 11, 'P' => 3, 'Q' => 6, 'R' => 8, 'S' => 12, 'T' => 14,
        'U' => 16, 'V' => 10, 'W' => 22, 'X' => 25, 'Y' => 24, 'Z' => 23,
    ];

    private const CHECKSUM_EVEN_VALUES = [
        '0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9,
        'A' => 0, 'B' => 1, 'C' => 2, 'D' => 3, 'E' => 4, 'F' => 5, 'G' => 6, 'H' => 7, 'I' => 8, 'J' => 9,
        'K' => 10, 'L' => 11, 'M' => 12, 'N' => 13, 'O' => 14, 'P' => 15, 'Q' => 16, 'R' => 17, 'S' => 18, 'T' => 19,
        'U' => 20, 'V' => 21, 'W' => 22, 'X' => 23, 'Y' => 24, 'Z' => 25,
    ];

    /**
     * TaxCode (CodiceFiscale)
     *
     * @see https://it.wikipedia.org/wiki/Codice_fiscale
     */
    public function taxId(): string
    {
        $day = $this->randomizer->getInt(1, 31);

        if ($this->randomizer->getBool()) {
            $day += 40;
        }

        $partialTaxId = $this->replacer->toUpper($this->replacer->lexify('??????'))
            . $this->replacer->numerify('##')
            . $this->randomizer->randomElement(self::MONTH_CODES)
            . str_pad((string) $day, 2, '0', STR_PAD_LEFT)
            . chr($this->randomizer->getInt(65, 90))
            . $this->replacer->numerify('###');

        return $partialTaxId . $this->calculateCheckCharacter($partialTaxId);
    }

    private function calculateCheckCharacter(string $partialTaxId): string
    {
        $sum = 0;
        $characters = str_split($partialTaxId);

        foreach ($characters as $index => $character) {
            if (($index + 1) % 2 === 0) {
                $sum += self::CHECKSUM_EVEN_VALUES[$character];

                continue;
            }

            $sum += self::CHECKSUM_ODD_VALUES[$character];
        }

        return chr(($sum % 26) + 65);
    }

    /**
     * Italian Fiscal Code (Codice Fiscale)
     *
     * @see https://it.wikipedia.org/wiki/Codice_fiscale
     */
    public function codiceFiscale(): string
    {
        return $this->taxId();
    }
}
