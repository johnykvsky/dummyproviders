<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\es_VE;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    protected array $community = [
        'Andalucía', 'Aragón', 'Principado de Asturias', 'Illes Balears', 'Canarias', 'Cantabria', 'Castilla y León', 'Castilla - La Mancha', 'Cataluña', 'Comunitat Valenciana', 'Extremadura', 'Galicia', 'Comunidad de Madrid', 'Región de Murcia', 'Comunidad Foral de Navarra', 'País Vasco', 'La Rioja', 'Ceuta', 'Melilla',
    ];

    protected array $country = [
        'Afganistán', 'Albania', 'Alemania', 'Andorra', 'Angola', 'Antigua y Barbuda', 'Arabia Saudí', 'Argelia', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaiyán',
        'Bahamas', 'Bangladés', 'Barbados', 'Baréin', 'Belice', 'Benín', 'Bielorrusia', 'Birmania', 'Bolivia', 'Bosnia-Herzegovina', 'Botsuana', 'Brasil', 'Brunéi Darusalam', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Bután', 'Bélgica',
        'Cabo Verde', 'Camboya', 'Camerún', 'Canadá', 'Catar', 'Chad', 'Chile', 'China', 'Chipre', 'Ciudad del Vaticano', 'Colombia', 'Comoras', 'Congo', 'Corea del Norte', 'Corea del Sur', 'Costa Rica', 'Costa de Marfil', 'Croacia', 'Cuba',
        'Dinamarca', 'Dominica',
        'Ecuador', 'Egipto', 'El Salvador', 'Emiratos Árabes Unidos', 'Eritrea', 'Eslovaquia', 'Eslovenia', 'España', 'Estados Unidos de América', 'Estonia', 'Etiopía',
        'Filipinas', 'Finlandia', 'Fiyi', 'Francia',
        'Gabón', 'Gambia', 'Georgia', 'Ghana', 'Granada', 'Grecia', 'Guatemala', 'Guinea', 'Guinea Ecuatorial', 'Guinea-Bisáu', 'Guyana',
        'Haití', 'Honduras', 'Hungría',
        'India', 'Indonesia', 'Irak', 'Irlanda', 'Irán', 'Islandia', 'Islas Marshall', 'Islas Salomón', 'Israel', 'Italia',
        'Jamaica', 'Japón', 'Jordania',
        'Kazajistán', 'Kenia', 'Kirguistán', 'Kiribati', 'Kuwait',
        'Laos', 'Lesoto', 'Letonia', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburgo', 'Líbano',
        'Macedonia', 'Madagascar', 'Malasia', 'Malaui', 'Maldivas', 'Mali', 'Malta', 'Marruecos', 'Mauricio', 'Mauritania', 'Micronesia', 'Moldavia', 'Mongolia', 'Montenegro', 'Mozambique', 'México', 'Mónaco',
        'Namibia', 'Nauru', 'Nepal', 'Nicaragua', 'Nigeria', 'Noruega', 'Nueva Zelanda', 'Níger',
        'Omán',
        'Pakistán', 'Palaos', 'Panamá', 'Papúa Nueva Guinea', 'Paraguay', 'Países Bajos', 'Perú', 'Polonia', 'Portugal',
        'Reino Unido', 'Reino Unido de Gran Bretaña e Irlanda del Norte', 'República Centroafricana', 'República Checa', 'República Democrática del Congo', 'República Dominicana', 'Ruanda', 'Rumanía', 'Rusia',
        'Samoa', 'San Cristóbal y Nieves', 'San Marino', 'San Vicente y las Granadinas', 'Santa Lucía', 'Santo Tomé y Príncipe', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leona', 'Singapur', 'Siria', 'Somalia', 'Sri Lanka', 'Suazilandia', 'Sudáfrica', 'Sudán', 'Suecia', 'Suiza', 'Surinam',
        'Tailandia', 'Tanzania', 'Tayikistán', 'Timor Oriental', 'Togo', 'Tonga', 'Trinidad y Tobago', 'Turkmenistán', 'Turquía', 'Tuvalu', 'Túnez',
        'Ucrania', 'Uganda', 'Uruguay', 'Uzbekistán',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Yemen', 'Yibuti',
        'Zambia', 'Zimbabue',
    ];

    protected array $cityPrefix = ['San', 'Santa', 'Puerto', 'Valle', 'Villa', 'Parroquia', 'El', 'Los', 'La', 'Las'];
    protected array $citySuffix = ['del Valle', 'de Mara', 'de Altagracia', 'de Asis', 'del Tuy', 'de Mata'];
    protected array $buildingNumber = ['%##', '%#', '%'];
    protected array $streetPrefix = [
        'Calle', 'Avenida', 'Av.', 'Cl.', 'Carretera', 'Callejón', 'Vereda',
    ];
    protected array $streetSuffix = ['Norte', 'Este', ' Sur', ' Oeste'];
    protected array $postcode = ['####'];
    protected array $state = [
        'Amazonas', 'Anzoátegui', 'Apure', 'Aragua', 'Barinas', 'Bolívar', 'Carabobo', 'Cojedes', 'Delta Amacuro',
        'Distrito Capital', 'Falcón', 'Guárico', 'Lara', 'Mérida', 'Miranda', 'Monagas', 'Nueva Esparta', 'Portuguesa',
        'Sucre', 'Táchira', 'Trujillo', 'Vargas', 'Yaracuy', 'Zulia',
    ];
    protected array $cityFormats = [
        '{{cityPrefix}} {{firstName}}{{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
    ];
    protected array $streetNameFormats = [
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{firstName}} {{lastName}}',
    ];
    protected array $streetAddressFormats = [
        '{{streetName}}, {{buildingNumber}}, {{secondaryAddress}}',
        '{{streetName}}, {{secondaryAddress}}',
    ];
    protected array $addressFormats = [
        '{{streetAddress}}, {{city}} Edo. {{state}}',
        '{{streetAddress}}, {{city}} Edo. {{state}}, {{postcode}}',
    ];
    protected array $secondaryAddressFormats = ['Nro #', 'Piso #', 'Casa #', 'Hab. #', 'Apto #', 'Nro ##', 'Piso ##', 'Casa ##', 'Hab. ##', 'Apto ##'];

    /** @example 'Avenida' */
    public function streetPrefix(): string
    {
        return $this->randomizer->randomElement($this->streetPrefix);
    }

    /** @example 'Villa' */
    public function cityPrefix(): string
    {
        return $this->randomizer->randomElement($this->cityPrefix);
    }

    /** @example 'Nro 3' */
    public function secondaryAddress(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->secondaryAddressFormats));
    }

    /** @example 'Aragua' */
    public function state(): string
    {
        return $this->randomizer->randomElement($this->state);
    }

    /** @example 'Comunidad de Madrid' */
    public function community()
    {
        return $this->randomizer->randomElement($this->community);
    }
}
