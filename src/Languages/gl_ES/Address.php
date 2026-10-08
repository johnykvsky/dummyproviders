<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\gl_ES;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    /** @var string[] */
    protected array $buildingNumber = ['%##', '%#', '%', 's/n'];

    /** @var string[] */
    protected array $streetPrefix = [
        'Rúa', 'Rúa', 'Rúa', 'Avenida', 'Praza', 'Camiño', 'Estrada', 'Travesía', 'Rolda', 'Paseo', 'Ruela', 'Costa', 'Lugar',
    ];

    /**
     * Postal codes of the provinces of A Coruña (15), Lugo (27), Ourense (32) and Pontevedra (36).
     *
     * @var string[]
     */
    protected array $postcode = ['15###', '27###', '32###', '36###'];

    /** @var string[] */
    protected array $state = ['A Coruña', 'Lugo', 'Ourense', 'Pontevedra'];

    /**
     * Official Galician names of some of the 313 municipalities (concellos) of Galicia.
     *
     * @var string[]
     *
     * @see https://www.xunta.gal/toponimia
     * @see https://gl.wikipedia.org/wiki/Lista_de_concellos_de_Galicia
     */
    protected array $cityName = [
        'A Coruña', 'A Estrada', 'A Fonsagrada', 'A Guarda', 'A Illa de Arousa', 'A Laracha', 'A Pobra do Caramiñal', 'A Rúa', 'Abegondo', 'Allariz', 'Ames', 'Arteixo', 'Arzúa', 'As Neves', 'As Pontes de García Rodríguez',
        'Baiona', 'Becerreá', 'Bergondo', 'Betanzos', 'Boiro', 'Boqueixón', 'Brión', 'Bueu', 'Burela',
        'Caldas de Reis', 'Camariñas', 'Cambados', 'Cambre', 'Cangas', 'Carballo', 'Carnota', 'Castro de Rei', 'Catoira', 'Cedeira', 'Cee', 'Celanova', 'Chantada', 'Corcubión', 'Coristanco', 'Culleredo',
        'Ferrol', 'Fisterra', 'Forcarei', 'Foz',
        'Gondomar', 'Guitiriz',
        'Lalín', 'Laxe', 'Lobios', 'Lousame', 'Lugo',
        'Malpica de Bergantiños', 'Marín', 'Melide', 'Miño', 'Moaña', 'Mondoñedo', 'Monforte de Lemos', 'Mos', 'Muros',
        'Narón', 'Negreira', 'Nigrán', 'Noia',
        'O Barco de Valdeorras', 'O Carballiño', 'O Grove', 'O Porriño', 'O Rosal', 'Oleiros', 'Ordes', 'Ortigueira', 'Ourense', 'Outes',
        'Padrón', 'Palas de Rei', 'Poio', 'Ponteareas', 'Pontecesures', 'Ponteceso', 'Pontedeume', 'Pontevedra', 'Porto do Son', 'Portomarín',
        'Redondela', 'Rianxo', 'Ribadavia', 'Ribadeo', 'Ribeira',
        'Sada', 'Salvaterra de Miño', 'Santa Comba', 'Santiago de Compostela', 'Sanxenxo', 'Sarria', 'Silleda', 'Soutomaior',
        'Teo', 'Tomiño', 'Tui',
        'Verín', 'Viana do Bolo', 'Vigo', 'Vila de Cruces', 'Vilagarcía de Arousa', 'Vilalba', 'Vilanova de Arousa', 'Vimianzo', 'Viveiro',
        'Xinzo de Limia',
        'Zas',
    ];

    /**
     * @var string[]
     *
     * @see https://gl.wikipedia.org/wiki/Lista_de_países_soberanos
     */
    protected array $country = [
        'Acerbaixán', 'Afganistán', 'Albania', 'Alemaña', 'Alxeria', 'Andorra', 'Angola', 'Antiga e Barbuda', 'Arabia Saudí', 'Arxentina', 'Armenia', 'Australia', 'Austria',
        'Bahamas', 'Bangladesh', 'Barbados', 'Baréin', 'Bélxica', 'Belice', 'Benín', 'Bielorrusia', 'Birmania', 'Bolivia', 'Bosnia e Hercegovina', 'Botswana', 'Brasil', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Bután',
        'Cabo Verde', 'Camboxa', 'Camerún', 'Canadá', 'Casaquistán', 'Chad', 'Chile', 'China', 'Chipre', 'Colombia', 'Comores', 'Congo', 'Corea do Norte', 'Corea do Sur', 'Costa do Marfil', 'Costa Rica', 'Croacia', 'Cuba',
        'Dinamarca', 'Dominica',
        'Ecuador', 'Emiratos Árabes Unidos', 'Eritrea', 'Eslovaquia', 'Eslovenia', 'España', 'Estados Unidos de América', 'Estonia', 'Etiopía', 'Exipto',
        'Fidxi', 'Filipinas', 'Finlandia', 'Francia',
        'Gabón', 'Gambia', 'Ghana', 'Granada', 'Grecia', 'Guatemala', 'Guinea', 'Guinea Ecuatorial', 'Guinea-Bisau', 'Güiana',
        'Haití', 'Honduras', 'Hungría',
        'Iemen', 'Illas Marshall', 'Illas Salomón', 'India', 'Indonesia', 'Iraq', 'Irán', 'Irlanda', 'Islandia', 'Israel', 'Italia',
        'Kenya', 'Kiribati', 'Kuwait',
        'Laos', 'Lesotho', 'Letonia', 'Líbano', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburgo',
        'Macedonia do Norte', 'Madagascar', 'Malaisia', 'Malawi', 'Maldivas', 'Malí', 'Malta', 'Marrocos', 'Mauricio', 'Mauritania', 'México', 'Micronesia', 'Moldavia', 'Mónaco', 'Mongolia', 'Montenegro', 'Mozambique',
        'Namibia', 'Nauru', 'Nepal', 'Nicaragua', 'Níxer', 'Nixeria', 'Noruega', 'Nova Zelandia',
        'O Salvador', 'Omán',
        'Países Baixos', 'Palau', 'Panamá', 'Papúa-Nova Guinea', 'Paquistán', 'Paraguai', 'Perú', 'Polonia', 'Portugal',
        'Qatar', 'Quirguicistán',
        'Reino Unido', 'República Centroafricana', 'República Checa', 'República Democrática do Congo', 'República Dominicana', 'Romanía', 'Ruanda', 'Rusia',
        'Samoa', 'San Cristovo e Nevis', 'San Marino', 'San Tomé e Príncipe', 'San Vicente e as Granadinas', 'Santa Lucía', 'Senegal', 'Serbia', 'Serra Leoa', 'Seychelles', 'Singapur', 'Siria', 'Somalia', 'Sri Lanka', 'Sudán', 'Suecia', 'Suíza', 'Suráfrica', 'Surinam',
        'Tailandia', 'Tanzania', 'Taxiquistán', 'Timor Leste', 'Togo', 'Tonga', 'Trinidad e Tobago', 'Tunisia', 'Turkmenistán', 'Turquía', 'Tuvalu',
        'Ucraína', 'Uganda', 'Uruguai', 'Uzbekistán',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Xamaica', 'Xapón', 'Xeorxia', 'Xibutí', 'Xordania',
        'Zambia', 'Zimbabwe',
    ];

    /** @var string[] */
    protected array $cityFormats = [
        '{{cityName}}',
    ];

    /** @var string[] */
    protected array $streetNameFormats = [
        '{{streetPrefix}} {{firstName}} {{lastName}}',
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} de {{cityName}}',
    ];

    /** @var string[] */
    protected array $streetAddressFormats = [
        '{{streetName}}, {{buildingNumber}}',
        '{{streetName}}, {{buildingNumber}}, {{secondaryAddress}}',
    ];

    /** @var string[] */
    protected array $addressFormats = [
        '{{streetAddress}}, {{postcode}} {{city}}',
    ];

    /** @var string[] */
    protected array $secondaryAddressFormats = [
        'Baixo', 'Baixo A', 'Baixo B', 'Ático', 'Entrechán',
        '#º', '#º A', '#º B', '#º C', '#º D', '#º Esq.', '#º Dta.', '#º Centro',
    ];

    /** @example 'Rúa' */
    public function streetPrefix(): string
    {
        return $this->randomizer->randomElement($this->streetPrefix);
    }

    /** @example 'Santiago de Compostela' */
    public function cityName(): string
    {
        return $this->randomizer->randomElement($this->cityName);
    }

    /** @example '3º A' */
    public function secondaryAddress(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->secondaryAddressFormats));
    }

    /** @example 'Pontevedra' */
    public function state(): string
    {
        return $this->randomizer->randomElement($this->state);
    }
}
