<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\pt_PT;

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
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} de {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} de {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} de {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}} {{lastName}}',
    ];

    protected array $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} de {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} de {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} de {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}} {{lastName}}',
    ];

    /** @see http://goo.gl/v6bScG document with all pt abreviations * */
    protected array $titleMale = ['Sr.', 'Dr.', 'Exmo.', 'Eng.', 'Eng.º', 'Ex.', 'Exº'];
    protected array $titleFemale = ['Sra.', 'Dra.', 'Exma', 'Eng.ª', 'Exª'];

    protected array $firstEightDigitsFormat = [
        '1#######',
        '2#######',
        '3#######',
        '45######',
        '5#######',
        '6#######',
        '70######',
        '71######',
        '72######',
        '77######',
        '79######',
        '8#######',
        '90######',
        '98######',
        '99######',
    ];

    /**
     * Taxpayer Identification Number (NIF in Portugal)
     *
     * @return string 9 digit number
     *
     * @see http://pt.wikipedia.org/wiki/N%C3%BAmero_de_identifica%C3%A7%C3%A3o_fiscal
     */
    public function taxpayerIdentificationNumber(): string
    {
        $firstEightDigits = $this->replacer->numerify($this->randomizer->randomElement($this->firstEightDigitsFormat));
        $lastDigit = $this->dvCalcMod11($firstEightDigits);

        return $firstEightDigits . $lastDigit;
    }

    /**
     * Generate module
     *
     * @param string $number number
     * @return int
     *
     * @see http://pt.wikipedia.org/wiki/D%C3%ADgito_verificador
     */
    public function dvCalcMod11($number)
    {
        $base = 9;
        $sum = 0;
        $factor = 2;

        for ($i = strlen($number); $i > 0; --$i) {
            $numbers[$i] = substr($number, $i - 1, 1);
            $partial[$i] = $numbers[$i] * $factor;
            $sum += $partial[$i];

            if ($factor == $base) {
                $factor = 1;
            }

            ++$factor;
        }

        $res = $sum % 11;

        return $res == 0 || $res == 1 ? 0 : 11 - $res;
    }

    /** @see http://nomesportugueses.blogspot.pt/2012/01/lista-dos-cem-nomes-mais-usados-em.html */
    protected array $firstNameMale = [
        'Rodrigo', 'João', 'Martim', 'Afonso', 'Tomás', 'Gonçalo', 'Francisco', 'Tiago',
        'Diogo', 'Guilherme', 'Pedro', 'Miguel', 'Rafael', 'Gabriel', 'Santiago', 'Dinis',
        'David', 'Duarte', 'José', 'Simão', 'Daniel', 'Lucas', 'Gustavo', 'André', 'Denis',
        'Salvador', 'António', 'Vasco', 'Henrique', 'Lourenço', 'Manuel', 'Eduardo', 'Bernardo',
        'Leandro', 'Luís', 'Diego', 'Leonardo', 'Alexandre', 'Rúben', 'Mateus', 'Ricardo',
        'Vicente', 'Filipe', 'Bruno', 'Nuno', 'Carlos', 'Rui', 'Hugo', 'Samuel', 'Álvaro',
        'Matias', 'Fábio', 'Ivo', 'Paulo', 'Jorge', 'Xavier', 'Marco', 'Isaac', 'Raúl', 'Benjamim',
        'Renato', 'Artur', 'Mário', 'Frederico', 'Cristiano', 'Ivan', 'Sérgio', 'Micael',
        'Vítor', 'Edgar', 'Kevin', 'Joaquim', 'Igor', 'Ângelo', 'Enzo', 'Valentim', 'Flávio',
        'Joel', 'Fernando', 'Sebastião', 'Tomé', 'César', 'Cláudio', 'Nelson', 'Lisandro', 'Jaime',
        'Gil', 'Mauro', 'Sandro', 'Hélder', 'Matheus', 'William', 'Gaspar', 'Márcio',
        'Martinho', 'Emanuel', 'Marcos', 'Telmo', 'Davi', 'Wilson',
    ];

    protected array $firstNameFemale = [
        'Maria', 'Leonor', 'Matilde', 'Mariana', 'Ana', 'Beatriz', 'Inês', 'Lara', 'Carolina', 'Margarida',
        'Joana', 'Sofia', 'Diana', 'Francisca', 'Laura', 'Sara', 'Madalena', 'Rita', 'Mafalda', 'Catarina',
        'Luana', 'Marta', 'Íris', 'Alice', 'Bianca', 'Constança', 'Gabriela', 'Eva', 'Clara', 'Bruna', 'Daniela',
        'Iara', 'Filipa', 'Vitória', 'Ariana', 'Letícia', 'Bárbara', 'Camila', 'Rafaela', 'Carlota', 'Yara',
        'Núria', 'Raquel', 'Ema', 'Helena', 'Benedita', 'Érica', 'Isabel', 'Nicole', 'Lia', 'Alícia', 'Mara',
        'Jéssica', 'Soraia', 'Júlia', 'Luna', 'Victória', 'Luísa', 'Teresa', 'Miriam', 'Adriana', 'Melissa',
        'Andreia', 'Juliana', 'Alexandra', 'Yasmin', 'Tatiana', 'Leticia', 'Luciana', 'Eduarda', 'Cláudia',
        'Débora', 'Fabiana', 'Renata', 'Kyara', 'Kelly', 'Irina', 'Mélanie', 'Nádia', 'Cristiana', 'Liliana',
        'Patrícia', 'Vera', 'Doriana', 'Ângela', 'Mia', 'Erica', 'Mónica', 'Isabela', 'Salomé', 'Cátia',
        'Verónica', 'Violeta', 'Lorena', 'Érika', 'Vanessa', 'Iris', 'Anna', 'Viviane', 'Rebeca', 'Neuza',
    ];

    protected array $lastName = [
        'Abreu', 'Almeida', 'Alves', 'Amaral', 'Amorim', 'Andrade', 'Anjos', 'Antunes', 'Araújo', 'Assunção',
        'Azevedo', 'Baptista', 'Barbosa', 'Barros', 'Batista', 'Borges', 'Branco', 'Brito', 'Campos', 'Cardoso',
        'Carneiro', 'Carvalho', 'Castro', 'Coelho', 'Correia', 'Costa', 'Cruz', 'Cunha', 'Domingues', 'Esteves',
        'Faria', 'Fernandes', 'Ferreira', 'Figueiredo', 'Fonseca', 'Freitas', 'Garcia', 'Gaspar', 'Gomes',
        'Gonçalves', 'Guerreiro', 'Henriques', 'Jesus', 'Leal', 'Leite', 'Lima', 'Lopes', 'Loureiro', 'Lourenço',
        'Macedo', 'Machado', 'Magalhães', 'Maia', 'Marques', 'Martins', 'Matias', 'Matos', 'Melo', 'Mendes',
        'Miranda', 'Monteiro', 'Morais', 'Moreira', 'Mota', 'Moura', 'Nascimento', 'Neto', 'Neves', 'Nogueira',
        'Nunes', 'Oliveira', 'Pacheco', 'Paiva', 'Pereira', 'Pinheiro', 'Pinho', 'Pinto', 'Pires', 'Ramos',
        'Reis', 'Ribeiro', 'Rocha', 'Rodrigues', 'Santos', 'Silva', 'Simões', 'Soares', 'Sousa',
        'Sá', 'Tavares', 'Teixeira', 'Torres', 'Valente', 'Vaz', 'Vicente', 'Vieira',
    ];
}
