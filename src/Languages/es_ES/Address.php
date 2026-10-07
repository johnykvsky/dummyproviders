<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\es_ES;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    protected array $cityPrefix = ['San', 'Vall', "L'", 'Villa', 'El', 'Los', 'La', 'Las', 'O', 'A', 'Os', 'As'];
    protected array $citySuffix = ['del Vallès', 'del Penedès', 'del Bages', 'de Ulla', 'de Lemos', 'del Mirador', 'de Arriba', 'de la Sierra', 'del Barco', 'de San Pedro', 'del Pozo', 'del Puerto', 'de las Torres', 'Alta', 'Baja', 'Medio'];
    protected array $buildingNumber = ['%##', '%#', '%'];
    protected array $streetPrefix = [
        'Calle', 'Avenida', 'Plaza', 'Paseo', 'Ronda', 'Travesía', 'Camino', 'Carrer', 'Avinguda', 'Plaça', 'Passeig', 'Travessera', 'Rúa', 'Praza', 'Ruela', 'Camiño',
    ];
    protected array $postcode = ['#####'];
    protected array $community = [
        'Andalucía', 'Aragón', 'Principado de Asturias', 'Illes Balears', 'Canarias', 'Cantabria', 'Castilla y León', 'Castilla - La Mancha', 'Cataluña', 'Comunitat Valenciana', 'Extremadura', 'Galicia', 'Comunidad de Madrid', 'Región de Murcia', 'Comunidad Foral de Navarra', 'País Vasco', 'La Rioja', 'Ceuta', 'Melilla',
    ];
    protected array $state = [
        'A Coruña', 'Álava', 'Albacete', 'Alicante', 'Almería', 'Asturias', 'Ávila', 'Badajoz', 'Barcelona', 'Burgos', 'Cáceres', 'Cádiz', 'Cantabria', 'Castellón', 'Ceuta', 'Ciudad Real', 'Cuenca', 'Córdoba', 'Girona', 'Granada', 'Guadalajara', 'Guipuzkoa', 'Huelva', 'Huesca', 'Illes Balears', 'Jaén', 'La Rioja', 'Las Palmas', 'León', 'Lleida', 'Lugo', 'Málaga', 'Madrid', 'Melilla', 'Murcia', 'Navarra', 'Ourense', 'Palencia', 'Pontevedra', 'Salamanca', 'Segovia', 'Sevilla', 'Soria', 'Santa Cruz de Tenerife', 'Tarragona', 'Teruel', 'Toledo', 'Valencia', 'Valladolid', 'Vizcaya', 'Zamora', 'Zaragoza',
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
    protected array $cityFormats = [
        '{{cityPrefix}} {{lastName}} {{citySuffix}}',
        '{{cityPrefix}} {{lastName}}',
        '{{lastName}} {{citySuffix}}',
    ];
    protected array $streetNameFormats = [
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}',
    ];
    protected array $streetAddressFormats = [
        '{{streetName}}, {{buildingNumber}}, {{secondaryAddress}}',
    ];
    protected array $addressFormats = [
        '{{streetAddress}}, {{postcode}}, {{city}}',
    ];
    protected array $secondaryAddressFormats = ['Bajos', 'Ático #º', 'Entre suelo #º', 'Bajo #º', '#º', '#º A', '#º B', '#º C', '#º D', '#º E', '#º F', '##º A', '##º B', '##º C', '##º D', '##º E', '##º F', '#º #º', '##º #º'];

    /**
     * @example 'Avenida'
     */
    public function streetPrefix(): string
    {
        return $this->randomizer->randomElement($this->streetPrefix);
    }

    /**
     * @example 'Villa'
     */
    public function cityPrefix(): string
    {
        return $this->randomizer->randomElement($this->cityPrefix);
    }

    /**
     * @example '3ºA'
     */
    public function secondaryAddress(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->secondaryAddressFormats));
    }

    /**
     * @example 'Barcelona'
     */
    public function state(): string
    {
        return $this->randomizer->randomElement($this->state);
    }

    /**
     * @example 'Comunidad de Madrid'
     */
    public function community()
    {
        return $this->randomizer->randomElement($this->community);
    }

}
