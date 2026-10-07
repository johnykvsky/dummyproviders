<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\cs_CZ;

use DummyGenerator\Core\Company as BaseCompany;
use DummyGenerator\Definitions\Randomizer\RandomizerInterface;
use DummyGenerator\Definitions\Replacer\ReplacerInterface;
use DummyGenerator\GeneratorInterface;

class Company extends BaseCompany
{
    public function __construct(
        RandomizerInterface $randomizer,
        GeneratorInterface $generator,
        protected ReplacerInterface $replacer,
    ) {
        parent::__construct($randomizer, $generator);
    }

    /**
     * @var array Czech company name formats.
     */
    protected array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}} {{companySuffix}}',
        '{{lastName}} a {{lastName}} {{companySuffix}}',
    ];

    /**
     * @var array Czech catch phrase formats.
     */
    protected array $catchPhraseFormats = [
        '{{catchPhraseVerb}} {{catchPhraseNoun}} {{catchPhraseAttribute}}',
        '{{catchPhraseVerb}} {{catchPhraseNoun}} a {{catchPhraseNoun}} {{catchPhraseAttribute}}',
        '{{catchPhraseVerb}} {{catchPhraseNoun}} {{catchPhraseAttribute}} a {{catchPhraseAttribute}}',
        'Ne{{catchPhraseVerb}} {{catchPhraseNoun}} {{catchPhraseAttribute}}',
    ];

    /**
     * @var array Czech nouns (used by the catch phrase format).
     */
    protected array $noun = [
        'bezpečnost', 'pohodlí', 'seo', 'rychlost', 'testování', 'údržbu', 'odebírání', 'výstavbu',
        'návrh', 'prodej', 'nákup', 'zprostředkování', 'odvoz', 'přepravu', 'pronájem',
    ];

    /**
     * @var array Czech verbs (used by the catch phrase format).
     */
    protected array $verb = [
        'zajišťujeme', 'nabízíme', 'děláme', 'provozujeme', 'realizujeme', 'předstihujeme', 'mobilizujeme',
    ];

    /**
     * @var array End of sentences (used by the catch phrase format).
     */
    protected array $attribute = [
        'pro vás', 'pro vaší službu', 'a jsme jednička na trhu', 'pro lepší svět', 'zdarma', 'se zárukou',
        's inovací', 'turbíny', 'mrakodrapů', 'lampiónků a svíček', 'bourací techniky', 'nákupních košíků',
        'vašeho webu', 'pro vaše zákazníky', 'za nízkou cenu', 'jako jediní na trhu', 'webu', 'internetu',
        'vaší rodiny', 'vašich známých', 'vašich stránek', 'čehokoliv na světě', 'za hubičku',
    ];

    /**
     * @var array Company suffixes.
     */
    protected array $companySuffix = ['s.r.o.', 's.r.o.', 's.r.o.', 's.r.o.', 'a.s.', 'o.p.s.', 'o.s.'];

    /**
     * Returns a random catch phrase noun.
     *
     * @return string
     */
    public function catchPhraseNoun(): string
    {
        return $this->randomizer->randomElement($this->noun);
    }

    /**
     * Returns a random catch phrase attribute.
     *
     * @return string
     */
    public function catchPhraseAttribute(): string
    {
        return $this->randomizer->randomElement($this->attribute);
    }

    /**
     * Returns a random catch phrase verb.
     *
     * @return string
     */
    public function catchPhraseVerb(): string
    {
        return $this->randomizer->randomElement($this->verb);
    }

    /**
     * @return string
     */
    public function catchPhrase(): string
    {
        $format = $this->randomizer->randomElement($this->catchPhraseFormats);

        return ucfirst($this->generator->parse($format));
    }

    /**
     * Generates valid czech IČO
     *
     * @see http://phpfashion.com/jak-overit-platne-ic-a-rodne-cislo
     *
     * @return string
     */
    public function ico()
    {
        $ico = $this->replacer->numerify('#######');
        $split = str_split($ico);
        $prod = 0;

        foreach ([8, 7, 6, 5, 4, 3, 2] as $i => $p) {
            $prod += $p * $split[$i];
        }
        $mod = $prod % 11;

        if ($mod === 0 || $mod === 10) {
            return "{$ico}1";
        }

        if ($mod === 1) {
            return "{$ico}0";
        }

        return $ico . (11 - $mod);
    }

    /**
     * Czech Tax Identification Number (Daňové identifikační číslo / DIČ)
     *
     * @see https://cs.wikipedia.org/wiki/Da%C5%88ov%C3%A9_identifika%C4%8Dn%C3%AD_%C4%8D%C3%ADslo
     */
    public function dic(): string
    {
        return 'CZ' . $this->ico();
    }
}
