<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\hy_AM;

use DummyGenerator\Core\Address as BaseAddress;

class Address extends BaseAddress
{
    protected array $cityPrefix = ['քաղաք', 'գյուղ'];

    protected array $regionSuffix = ['մարզ'];
    protected array $streetPrefix = ['փողոց'];

    protected array $buildingNumber = ['%#'];
    protected array $postcode = ['00##'];
    protected array $country = [
        'Մոնակո', 'Սինգապուր', 'Վատիկան', 'Մալդիվներ',
        'Մալթա', 'Բահրեյն', 'Բանգլադեշ', 'Բարբադոս',
        'Չինաստանի Հանրապետություն', 'Սան Մարինո',
        'Հարավային Կորեա', 'Նիդերլանդներ', 'Լիբանան',
        'Մարշալյան կղզիներ', 'Հնդկաստան', 'Կոմորներ',
        'Իսրայել', 'Բուրունդի', 'Հաիթի', 'Բելգիա', 'Ճապոնիա',
        'Ֆիլիպիններ', 'Շրի Լանկա', 'Գրենադա', 'Սալվադոր',
        'Վիետնամ', 'Ճամայկա', 'Անգլիա', 'Տրինիդադ և Տոբագո',
        'Գերմանիա', 'Պակիստան', 'Նեպալ', 'Դոմինիկանա',
        'Անտիգուա և Բարբուդա', 'Իտալիա', 'Լյուքսեմբուրգ',
        'Շվեյցարիա', 'Անդորրա', 'Նիգերիա', 'Գամբիա',
        'Քուվեյթ', 'Միկրոնեզիա', 'Ուգանդա', 'Չինաստան',
        'Թաիլանդ', 'Մալավի', 'Չեխիա', 'Մոլդովա', 'Դանիա',
        'Ինդոնեզիա', 'Գվատեմալա', 'Լեհաստան', 'Սիրիա',
        'Կիպրոս', 'Ֆրանսիա', 'Պորտուգալիա', 'Տոգո', 'Սլովակիա',
        'Հունգարիա', 'Ալբանիա', 'Կուբա', 'Գանա', 'Հայաստան',
        'Թուրքիա', 'Սլովենիա', 'Ավստրիա', 'Ադրբեջան',
        'Սերբիա', 'Ռումինիա', 'Իսպանիա', 'Բոսնիա և Հերցեգովինա',
        'Կոստա Ռիկա', 'Մալայզիա', 'Մակեդոնիա', 'Հունաստան',
        'Եգիպտոս', 'Կամբոջա', 'Բենին', 'Եթովպիա', 'Խորվաթիա',
        'Բիրմա', 'Սվազիլենդ', 'Արևելյան Թիմոր', 'Ուկրաինա',
        'Սիերա Լեոնե', 'Մարոկո', 'Հոնդուրաս', 'Հորդանան', 'Քենիա',
        'Բրունեյ', 'Իրաք', 'Վրաստան', 'Թունիս', 'Բուլղարիա',
        'Սենեգալ', 'Ուզբեկստան', 'Բուրկինա Ֆասո', 'Մեքսիկա',
        'Լիտվա', 'Տաջիկստան', 'Էկվադոր', 'Ֆիջի', 'Էրիթրեա', 'Իրան',
        'Բելառուս', 'Նիկարագուա', 'Աֆղանստան', 'Պալաու', 'Եմեն',
        'Տանզանիա', 'Պանամա', 'Գվինեա', 'Կամերուն',
        'Հարավային Աֆրիկա', 'Կոլումբիա', 'Մադագասկար',
        'Լատվիա', 'Լիբերիա', 'Կոնգո', 'Զիմբաբվե', 'Վենեսուելա',
        'Էստոնիա', 'Մոզամբիկ', 'Լաոս', 'Բրազիլիա', 'Պերու',
        'Բահամներ', 'Չիլի', 'Շվեդիա', 'Ուրուգվայ', 'Վանուատու',
        'Բութան', 'Զամբիա', 'Սուդան', 'Սոմալի', 'Նոր Զելանդիա',
        'Պարագվայ', 'Ֆինլանդիա', 'Արգենտինա', 'Ալժիր', 'Նորվեգիա',
        'Բելիզ', 'Հարավային Սուդան', 'Մալի', 'Անգոլա',
        'Թուրքմենստան', 'Օման', 'Բոլիվիա', 'Ռուսաստան', 'Գաբոն',
        'Ղազախստան', 'Լիբիա', 'Գայանա', 'Կանադա', 'Բոտսվանա',
        'Մավրիտանիա', 'Իսլանդիա', 'Սուրինամ', 'Ավստրալիա',
        'Նամիբիա', 'Մոնղոլիա',
    ];

    protected array $region = [
        'Արագածոտնի', 'Արարատի', 'Արմավիրի',
        'Գեղարքունիքի', 'Լոռու', 'Կոտայքի', 'Շիրակի',
        'Սյունիքի', 'Վայոց Ձորի', 'Տավուշի',
    ];

    protected array $city = [
        'Աբովյան', 'Ագարակ', 'Ալավերդի', 'Ախթալա', 'Այրում', 'Աշտարակ', 'Ապարան',
        'Արարատ', 'Արթիկ', 'Արմավիր', 'Արտաշատ', 'Բերդ', 'Բյուրեղավան', 'Գավառ',
        'Գյումրի', 'Գորիս', 'Դաստակերտ', 'Դիլիջան', 'Եղեգնաձոր', 'Եղվարդ', 'Երևան',
        'Էջմիածին', 'Թալին', 'Թումանյան', 'Իջևան', 'Ծաղկաձոր', 'Կապան', 'Հրազդան',
        'Ճամբարակ', 'Մասիս', 'Մարալիկ', 'Մարտունի', 'Մեծամոր', 'Մեղրի', 'Նոր',
        'Նոյեմբերյան', 'Շամլուղ', 'Չարենցավան', 'Ջերմուկ', 'Սիսիան', 'Սպիտակ',
        'Ստեփանավան', 'Սևան', 'Վայք', 'Վանաձոր', 'Վարդենիս', 'Վեդի', 'Տաշիր',
        'Քաջարան',
    ];

    protected array $street = [
        'Պուշկին', 'Տերյան', 'Աբովյան', 'Ագաթանգեղոս', 'Անդրանիկ', 'Օտյան', 'Լուկաշին',
        'Տիչինա', 'Շինարարներ', 'Լենինգրադյան', 'Կիևյան',
    ];

    protected array $addressFormats = [
        '{{region}} {{regionSuffix}}, {{cityPrefix}} {{city}}, {{street}} {{buildingNumber}} {{streetPrefix}}, {{postcode}}',
    ];

    public function buildingNumber(): string
    {
        return $this->replacer->numerify($this->randomizer->randomElement($this->buildingNumber));
    }

    public function address(): string
    {
        $format = $this->randomizer->randomElement($this->addressFormats);

        return $this->generator->parse($format);
    }

    public function country(): string
    {
        return $this->randomizer->randomElement($this->country);
    }

    public function postcode(): string
    {
        return $this->replacer->toUpper($this->replacer->bothify($this->randomizer->randomElement($this->postcode)));
    }

    public function regionSuffix()
    {
        return $this->randomizer->randomElement($this->regionSuffix);
    }

    public function region(): string
    {
        return $this->randomizer->randomElement($this->region);
    }

    public function cityPrefix(): string
    {
        return $this->randomizer->randomElement($this->cityPrefix);
    }

    public function city(): string
    {
        return $this->randomizer->randomElement($this->city);
    }

    public function streetPrefix(): string
    {
        return $this->randomizer->randomElement($this->streetPrefix);
    }

    public function street()
    {
        return $this->randomizer->randomElement($this->street);
    }

}
