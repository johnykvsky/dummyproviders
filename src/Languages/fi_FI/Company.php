<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\fi_FI;

use DummyGenerator\Core\Company as BaseCompany;

class Company extends BaseCompany
{
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}}, {{lastName}} and {{lastName}}',
    ];

    protected array $catchPhraseWords = [
        [
            'Ainoa', 'Adaptiivinen', 'Automatisoitu', 'Avoin', 'Avoimen lähdekoodin', 'Digitalisoitu', 'Dynaaminen', 'Erikoistunut', 'Ennakoiva', 'Ergonominen', 'Hallittu', 'Hajautettu', 'Horisontaalinen', 'Integroitu', 'Innovatiivinen', 'Jaettava', 'Keskittynyt', 'Käyttäjäystävällinen', 'Laajenettu', 'Laajennettava', 'Lievittävä', 'Maailmanlaajuinen', 'Muokattava', 'Monitoroitu', 'Monikerroksinen', 'Ohjelmoitava', 'Optimoitu', 'Organisoitu', 'Orgaaninen', 'Rinnastettava', 'Räätälöitävä', 'Saumaton', 'Tasapainotettava', 'Täysin yhteensopiva', 'Yhteensopiva', 'Yksinomainen', 'Vaiheittainen', 'Virtuaalinen', 'Visionäärinen', 'Valinnainen', 'Verkostoitunut',
        ],
        [
            '24/7', '3. sukupolven', '4. sukupolven', '5. sukupolven', '6. sukupolven', 'alueellinen', 'analysoiva', 'assymmetrinen', 'asynkroninen', 'asiakaslähtöinen', 'dynaaminen', 'globaali', 'heuristinen', 'hybridi', 'inkrementaalinen', 'interaktiivinen', 'kahtiajakautuva', 'kaksisuuntainen', 'konkreettinen', 'korkean tason', 'logistinen', 'johdonmukainen', 'maksimaalinen', 'moniajettava', 'multimedia', 'optimaalinen', 'optimoiva', 'omistautunut', 'paikallinen', 'reaaliaikainen', 'seuraavan sukupolven', 'skaalautuva', 'systeeminen',
        ],
        [
            'algoritmi', 'yhteisö', 'analysaattori', 'sovellus', 'lähestymistapa', 'arkkitehtuuri', 'arkisto', 'ryhmä', 'sovitin', 'benchmark', 'kapasiteetti', 'tietokanta', 'piiri', 'emulaatio', 'konsepti', 'firmware', 'rakenne', 'funktio', 'rauta', 'help-desk', 'hierarkia', 'hubi', 'implementaatio', 'intranet', 'malli', 'ohjelmisto', 'ratkaisu', 'strategia', 'menestys', 'projekti', 'tuote', 'tuki', 'www-sivusto', 'synergia', 'protokolla', 'koodaus', 'ennuste', 'joustavuus', 'extranet', 'salaus', 'kompleksisuus', 'ydin', 'asenne', 'liitto', 'internetratkaisu', 'asennus', 'monitorointi', 'infrastruktuuri',
        ],
    ];

    protected array $bsWords = [
        [
            'implementoi', 'käyttää', 'integroi', 'optimoi', 'kehittää', 'muuntaa', 'omaksuu', 'mahdollistaa', 'orkestoi', 'uudelleenkeksii', 'kerää', 'kokoaa', 'kasvattaa', 'parantaa', 'helpottaa', 'toimittaa', 'antaa', 'täyttää', 'vapauttaa', 'ajaa', 'jatkaa', 'mullistaa', 'iteroi', 'generoi', 'hyödyntää', 'brandaa', 'muokkaa', 'kasvattaa', 'kytkee', 'innovoi', 'viljelee', 'visualisoi',
        ],
        [
            'maailmanluokan', '24/7', 'maailmanlaajuisia', 'interaktiivisia', 'seksikkäitä', 'rikkaita', 'visionäärisiä', 'parhaita', 'viraaleja', 'dynaamisia', 'strategisia', 'vallankumouksellisia', '24/365', 'e-bisnes', 'virtuaalisia', 'intuitiivisia', 'ennakoivia', 'kitkattomia', 'jaettuja', 'reaaliaikaisia', 'huippuluokan', 'tehokkaita', 'suorituskykyisiä', 'pystyviä', 'laajennettavissa olevia', 'venyviä', 'yhteisvaikutteisia', 'seuraavan sukupolven', 'plug-and-play', 'yhteistyökykyisiä', 'kustomoituja', 'langattomia', 'selkeitä', 'avoimen lähdekoodin',
        ],
        [
            'kanavia', 'silmämunia', 'ratkaisuja', 'e-palveluja', 'portaaleja', 'teknologioita', 'käyttäjiä', 'verkkoja', 'palveluita', 'ohjelmia', 'web-ohjelmistoja', 'kokemuksia', 'systeemejä', 'rajapintoja', 'yhteisöjä', 'markkinarakoja', 'skeemoja', 'arkkitehtuureja', 'malleja', 'sisältöä', 'mainoksia',
        ],
    ];

    protected array $companySuffix = ['OY', 'AB', 'OY AB', 'RY', 'OYj', 'Tmi.', 'Inc.', 'Ltd'];

    /**
     * @example 'Ainoa 3.sukupolven ohjelmisto'
     */
    public function catchPhrase(): string
    {
        $result = [];

        foreach ($this->catchPhraseWords as &$word) {
            $result[] = $this->randomizer->randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * @example 'hyödyntää maailmanlaajuisia yhteisöjä'
     */
    public function bs(): string
    {
        $result = [];

        foreach ($this->bsWords as &$word) {
            $result[] = $this->randomizer->randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * Finnish Business ID (Yritys- ja yhteisötunnus / Y-tunnus)
     *
     * 7 digits, hyphen, and a check digit (mod 11)
     *
     * @see https://fi.wikipedia.org/wiki/Yritys-_ja_yhteis%C3%B6tunnus
     */
    public function businessId(): string
    {
        $weights = [7, 9, 10, 5, 8, 4, 2];
        do {
            $digits = [];
            for ($i = 0; $i < 7; ++$i) {
                $digits[] = $this->randomizer->getInt(0, 9);
            }
            $sum = 0;
            for ($i = 0; $i < 7; ++$i) {
                $sum += $digits[$i] * $weights[$i];
            }
            $remainder = $sum % 11;
        } while ($remainder === 1);

        $check = $remainder === 0 ? 0 : 11 - $remainder;

        return implode('', $digits) . '-' . $check;
    }

    public function yTunnus(): string
    {
        return $this->businessId();
    }

    public function alv(): string
    {
        return 'FI' . str_replace('-', '', $this->businessId());
    }

    public function vat(): string
    {
        return $this->alv();
    }
}
