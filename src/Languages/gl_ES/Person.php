<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\gl_ES;

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

    /** @var string[] */
    private array $crcMap = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

    /**
     * In Galicia, as in the rest of Spain, people usually have two surnames.
     *
     * @var string[]
     */
    protected array $maleNameFormats = [
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
    ];

    /** @var string[] */
    protected array $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
    ];

    /**
     * Mix of the most frequent names in Galicia and traditional Galician forms.
     *
     * @var string[]
     *
     * @see https://www.ine.es/dyngs/INEbase/es/operacion.htm?c=Estadistica_C&cid=1254736177009&menu=ultiDatos&idp=1254734710990
     * @see https://www.ige.gal/
     */
    protected array $firstNameMale = [
        'Adrián', 'Afonso', 'Alberte', 'Alejandro', 'Alexandre', 'Andrés', 'Antón', 'Antonio', 'Anxo',
        'Bieito', 'Brais', 'Breixo',
        'Carlos',
        'Daniel', 'David', 'Diego',
        'Estevo',
        'Fiz', 'Francisco',
        'Gonzalo',
        'Hugo',
        'Iago', 'Iván',
        'Javier', 'Jesús', 'José', 'José Luis', 'José Manuel', 'Juan',
        'Lois', 'Lucas', 'Luis',
        'Manuel', 'Martín', 'Martiño', 'Mateo',
        'Nicolás',
        'Pablo', 'Paio', 'Pedro',
        'Ramón', 'Roi',
        'Samuel',
        'Tomé',
        'Uxío',
        'Xabier', 'Xacobe', 'Xaime', 'Xián', 'Xoán', 'Xoel', 'Xosé', 'Xulio', 'Xurxo',
    ];

    /**
     * Mix of the most frequent names in Galicia and traditional Galician forms.
     *
     * @var string[]
     *
     * @see https://www.ine.es/dyngs/INEbase/es/operacion.htm?c=Estadistica_C&cid=1254736177009&menu=ultiDatos&idp=1254734710990
     * @see https://www.ige.gal/
     */
    protected array $firstNameFemale = [
        'Alba', 'Aldara', 'Ana', 'Andrea', 'Antía',
        'Beatriz', 'Branca',
        'Candela', 'Carla', 'Carme', 'Carmen', 'Cristina',
        'Dolores',
        'Elena', 'Eva',
        'Helena',
        'Icía', 'Iria', 'Irene',
        'Josefa',
        'Laura', 'Lorena', 'Lúa', 'Lucía',
        'Manuela', 'María', 'María Carmen', 'María José', 'Mariña', 'Marta', 'Martina',
        'Nerea', 'Noa', 'Noelia',
        'Olaia', 'Olalla',
        'Paula', 'Pilar',
        'Raquel', 'Rosa', 'Rosalía',
        'Sabela', 'Sara', 'Silvia', 'Sofía',
        'Tareixa',
        'Uxía',
        'Vera',
        'Xiana', 'Xoana', 'Xulia',
    ];

    /**
     * Most frequent surnames in Galicia plus common Galician surnames.
     *
     * @var string[]
     *
     * @see https://www.ine.es/dyngs/INEbase/es/operacion.htm?c=Estadistica_C&cid=1254736177009&menu=ultiDatos&idp=1254734710990
     * @see https://www.ige.gal/
     */
    protected array $lastName = [
        'Abelleira', 'Agra', 'Alonso', 'Álvarez', 'Amoedo', 'Areán', 'Arias',
        'Baamonde', 'Balado', 'Barreiro', 'Bermúdez', 'Blanco', 'Bouza', 'Bouzas', 'Brea',
        'Cabana', 'Calvo', 'Campos', 'Cao', 'Carballeira', 'Carballo', 'Carreira', 'Casal', 'Castelo', 'Castiñeira', 'Castro', 'Cerviño', 'Conde', 'Costa', 'Couto', 'Covelo', 'Crespo', 'Currás',
        'Díaz', 'Domínguez', 'Dopico',
        'Estévez',
        'Feijoo', 'Fernández', 'Ferreiro', 'Ferro', 'Figueroa', 'Fontán', 'Formoso', 'Fraga', 'Freire',
        'Gago', 'García', 'Garrido', 'Gestal', 'Gil', 'Gómez', 'Gondar', 'González', 'Grandal', 'Graña',
        'Iglesias',
        'Lage', 'Lamas', 'Lema', 'Lois', 'López', 'Lorenzo', 'Losada', 'Loureiro', 'Louzao',
        'Maceiras', 'Mariño', 'Martínez', 'Méndez', 'Mera', 'Míguez', 'Montero', 'Moreira', 'Mosquera', 'Mouriño',
        'Neira', 'Nogueira', 'Novoa', 'Núñez',
        'Ogando', 'Otero', 'Outeiro',
        'Pardo', 'Paz', 'Pazos', 'Pena', 'Pereira', 'Pérez', 'Piñeiro', 'Portela', 'Porto', 'Pose', 'Prieto',
        'Quintela', 'Quiroga',
        'Regueiro', 'Rey', 'Rial', 'Rivas', 'Rodal', 'Rodríguez', 'Romero',
        'Sánchez', 'Seoane', 'Silva', 'Sousa', 'Souto', 'Suárez',
        'Taboada', 'Teijeiro', 'Tojo', 'Trigo',
        'Valcárcel', 'Varela', 'Vázquez', 'Veiga', 'Vidal', 'Vieites', 'Vilar', 'Vilas', 'Viñas',
    ];

    /** @var string[] */
    protected array $titleMale = ['Sr.', 'D.', 'Dr.'];

    /** @var string[] */
    protected array $titleFemale = ['Sra.', 'D.ª', 'Dra.'];

    /** @var string[] */
    protected array $licenceCodes = ['AM', 'A1', 'A2', 'A', 'B', 'B+E', 'C1', 'C1+E', 'C', 'C+E', 'D1', 'D1+E', 'D', 'D+E'];

    /**
     * Generate a Documento Nacional de Identidad (DNI) number
     *
     * @see https://es.wikibooks.org/wiki/Algoritmo_para_obtener_la_letra_del_NIF#Algoritmo
     * @example '77446565E'
     */
    public function dni(): string
    {
        $number = (int) $this->replacer->numerify('########');
        $letter = $this->crcMap[$number % 23];

        return sprintf('%08d%s', $number, $letter);
    }

    /** @see https://sede.dgt.gob.es/es/tramites-y-multas/permiso-de-conduccion/obtencion-permiso-licencia-conduccion/clases-permiso-conduccion-edad.shtml */
    public function licenceCode(): string
    {
        return $this->randomizer->randomElement($this->licenceCodes);
    }
}
