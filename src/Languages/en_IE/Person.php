<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\en_IE;

use DummyGenerator\Core\Person as BasePerson;

class Person extends BasePerson
{
    /** @var string[] */
    protected array $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
    ];

    /** @var string[] */
    protected array $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
    ];

    /**
     * @var string[]
     *
     * @see https://www.cso.ie/en/interactivezone/visualisationtools/babynamesofireland/
     */
    protected array $firstNameMale = [
        'Aaron', 'Adam', 'Aidan', 'Alan',
        'Barry', 'Brendan', 'Brian',
        'Cathal', 'Cian', 'Ciaran', 'Colm', 'Conor', 'Cormac',
        'Daniel', 'Darragh', 'David', 'Declan', 'Denis', 'Dermot', 'Diarmuid', 'Donal', 'Dylan',
        'Eamon', 'Eoin',
        'Fergal', 'Fintan', 'Fionn',
        'Gareth', 'Gary',
        'Jack', 'James', 'Jason', 'John', 'Joseph',
        'Keith', 'Kevin', 'Kieran', 'Killian',
        'Liam', 'Lorcan', 'Luke',
        'Malachy', 'Mark', 'Martin', 'Michael',
        'Niall', 'Noel',
        'Oisin', 'Owen',
        'Padraig', 'Patrick', 'Paul', 'Peter',
        'Robert', 'Ronan', 'Rory', 'Ryan',
        'Seamus', 'Sean', 'Shane', 'Simon', 'Stephen',
        'Tadhg', 'Thomas', 'Timothy',
    ];

    /**
     * @var string[]
     *
     * @see https://www.cso.ie/en/interactivezone/visualisationtools/babynamesofireland/
     */
    protected array $firstNameFemale = [
        'Aisling', 'Amy', 'Anna', 'Aoife',
        'Bridget', 'Brigid',
        'Caoimhe', 'Catherine', 'Chloe', 'Ciara', 'Claire', 'Clodagh',
        'Deirdre',
        'Eileen', 'Eimear', 'Ella', 'Emer', 'Emily', 'Emma',
        'Fionnuala', 'Fiona',
        'Grace', 'Grainne',
        'Hannah', 'Holly',
        'Jane', 'Jennifer',
        'Kate', 'Katie',
        'Laura', 'Lauren', 'Lily', 'Lisa',
        'Maeve', 'Mairead', 'Mary', 'Megan', 'Molly',
        'Niamh', 'Nora',
        'Olivia', 'Orlaith',
        'Rachel', 'Roisin',
        'Saoirse', 'Sarah', 'Sinead', 'Siobhan', 'Sophie', 'Sorcha',
    ];

    /**
     * @var string[]
     *
     * @see https://www.cso.ie/en/media/csoie/census/documents/Surnames_in_Ireland.pdf
     */
    protected array $lastName = [
        'Barry', 'Brady', 'Brennan', 'Brown', 'Burke', 'Butler', 'Byrne',
        'Campbell', 'Carroll', 'Casey', 'Clarke', 'Collins', 'Connolly',
        'Daly', 'Doherty', 'Donnelly', 'Donovan', 'Doyle', 'Duffy', 'Dunne',
        'Farrell', 'Fitzgerald', 'Fitzpatrick', 'Flynn', 'Foley',
        'Gallagher',
        'Hayes', 'Healy', 'Hughes',
        'Johnston',
        'Kavanagh', 'Kelly', 'Kennedy',
        'Lynch',
        'Maguire', 'Mahon', 'Martin', 'McCarthy', 'McDonnell', 'McGrath', 'McLoughlin', 'McMahon', 'Moore', 'Moran', 'Murphy', 'Murray',
        'Nolan',
        'O\'Brien', 'O\'Callaghan', 'O\'Connell', 'O\'Connor', 'O\'Dea', 'O\'Donnell', 'O\'Farrell', 'O\'Grady', 'O\'Leary', 'O\'Mahony', 'O\'Neill', 'O\'Reilly', 'O\'Shea', 'O\'Sullivan',
        'Power',
        'Quinn',
        'Regan', 'Ryan',
        'Smith', 'Stewart', 'Sweeney',
        'Thompson',
        'Walsh', 'Wilson',
    ];
}
