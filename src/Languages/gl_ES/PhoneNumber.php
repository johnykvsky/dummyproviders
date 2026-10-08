<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\gl_ES;

use DummyGenerator\Core\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    /**
     * Galician landline prefixes: 981 (A Coruña), 982 (Lugo), 986 (Pontevedra) and 988 (Ourense).
     *
     * @var string[]
     *
     * @see https://es.wikipedia.org/wiki/Anexo:Prefijos_telef%C3%B3nicos_de_Espa%C3%B1a
     */
    protected array $formats = [
        '+34 981 ## ## ##',
        '+34 982 ## ## ##',
        '+34 986 ## ## ##',
        '+34 988 ## ## ##',
        '+34 981######',
        '+34 982######',
        '+34 986######',
        '+34 988######',
        '981 ## ## ##',
        '982 ## ## ##',
        '986 ## ## ##',
        '988 ## ## ##',
        '981######',
        '982######',
        '986######',
        '988######',
    ];
}
