<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\uk_UA;

use DummyGenerator\Core\Person as BasePerson;
use DummyGenerator\Definitions\Extension\Exception\ExtensionArgumentException;

class Person extends BasePerson
{
    protected array $maleNameFormats = [
        '{{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}} {{middleNameMale}}',
    ];

    protected array $femaleNameFormats = [
        '{{lastName}} {{firstNameFemale}} {{middleNameFemale}}',
        '{{firstNameFemale}} {{middleNameFemale}} {{lastName}}',
    ];

    protected array $firstNameMale = [
        'Євген', 'Адам', 'Олександр', 'Олексій', 'Анатолій', 'Андрій', 'Антон', 'Артем', 'Артур', 'Борис', 'Вадим', 'Валентин', 'Валерій',
        'Василь', 'Віталій', 'Володимир', 'Владислав', 'Геннадій', 'Георгій', 'Григорій', 'Данил', 'Данило', 'Денис', 'Дмитро',
        'Євгеній', 'Іван', 'Ігор', 'Йосип', 'Кирил', 'Костянтин', 'Лев', 'Леонід', 'Максим', 'Мирослав', 'Михайло', 'Назар',
        'Микита', 'Микола', 'Олег', 'Павло', 'Роман', 'Руслан', 'Сергій', 'Станіслав', 'Тарас', 'Тимофій', 'Федір',
        'Юрій', 'Ярослав', 'Богдан', 'Болеслав', 'В\'ячеслав', 'Валерій', 'Всеволод', 'Віктор', 'Ілля',
    ];

    protected array $firstNameFemale = [
        'Олександра', 'Олена', 'Алла', 'Анастасія', 'Анна', 'Валентина', 'Валерія', 'Віра', 'Вікторія', 'Галина', 'Дар\'я', 'Діана', 'Євгенія',
        'Катерина', 'Олена', 'Єлизавета', 'Інна', 'Ірина', 'Катерина', 'Кіра', 'Лариса', 'Любов', 'Людмила', 'Маргарита', 'Марина',
        'Марія', 'Надія', 'Наташа', 'Ніна', 'Оксана', 'Ольга', 'Поліна', 'Раїса', 'Світлана', 'Софія', 'Тамара', 'Тетяна',
        'Юлія', 'Ярослава',
    ];

    protected array $middleNameMale = [
        'Олександрович', 'Олексійович', 'Андрійович', 'Євгенович', 'Сергійович', 'Іванович',
        'Федорович', 'Тарасович', 'Васильович', 'Романович', 'Петрович', 'Миколайович',
        'Борисович', 'Йосипович', 'Михайлович', 'Валентинович', 'Янович', 'Анатолійович',
        'Євгенійович', 'Володимирович',
    ];

    protected array $middleNameFemale = [
        'Олександрівна', 'Олексіївна', 'Андріївна', 'Євгенівна', 'Сергіївна', 'Іванівна',
        'Федорівна', 'Тарасівна', 'Василівна', 'Романівна', 'Петрівна', 'Миколаївна',
        'Борисівна', 'Йосипівна', 'Михайлівна', 'Валентинівна', 'Янівна', 'Анатоліївна',
        'Євгеніївна', 'Володимирівна',
    ];

    protected array $lastName = [
        'Антоненко', 'Василенко', 'Васильчук', 'Васильєв', 'Гнатюк', 'Дмитренко',
        'Захарчук', 'Іванченко', 'Микитюк', 'Павлюк', 'Панасюк', 'Петренко', 'Романченко',
        'Сергієнко', 'Середа', 'Таращук', 'Боднаренко', 'Броваренко', 'Броварчук', 'Кравченко',
        'Кравчук', 'Крамаренко', 'Крамарчук', 'Мельниченко', 'Мірошниченко', 'Шевченко', 'Шевчук',
        'Шинкаренко', 'Пономаренко', 'Пономарчук', 'Лисенко',
    ];

    /**
     * Return male middle name
     *
     * @return string Middle name
     *
     * @example 'Іванович'
     */
    public function middleNameMale(): string
    {
        return $this->randomizer->randomElement($this->middleNameMale);
    }

    /**
     * Return female middle name
     *
     * @return string Middle name
     *
     * @example 'Івановна'
     */
    public function middleNameFemale(): string
    {
        return $this->randomizer->randomElement($this->middleNameFemale);
    }

    /**
     * Return middle name for the specified gender.
     *
     * @param string|null $gender A gender the middle name should be generated
     *                            for. If the argument is skipped a random gender will be used.
     * @return string Middle name
     */
    public function middleName(?string $gender = null): string
    {
        if ($gender === static::GENDER_MALE) {
            return $this->middleNameMale();
        }

        if ($gender === static::GENDER_FEMALE) {
            return $this->middleNameFemale();
        }

        return $this->middleName($this->randomizer->randomElement([
            static::GENDER_MALE,
            static::GENDER_FEMALE,
        ]));
    }

    /**
     * Ukrainian Individual Taxpayer Number (РНОКПП / ІПН)
     *
     * 10 digits with weighted checksum mod 11
     *
     * @see https://uk.wikipedia.org/wiki/%D0%86%D0%B4%D0%B5%D0%BD%D1%82%D0%B8%D1%84%D1%96%D0%BA%D0%B0%D1%86%D1%96%D0%B9%D0%BD%D0%B8%D0%B9_%D0%BD%D0%BE%D0%BC%D0%B5%D1%80_%D1%84%D1%96%D0%B7%D0%B8%D1%87%D0%BD%D0%BE%D1%97_%D0%BE%D1%81%D0%BE%D0%B1%D0%B8
     */
    public function rntrc(): string
    {
        $weights = [-1, 5, 7, 9, 4, 6, 10, 2, 8];
        $digits = [$this->randomizer->getInt(1, 9)];
        for ($i = 1; $i < 9; ++$i) {
            $digits[] = $this->randomizer->getInt(0, 9);
        }

        $sum = 0;
        for ($i = 0; $i < 9; ++$i) {
            $sum += $digits[$i] * $weights[$i];
        }

        $check = ($sum % 11) % 10;
        if ($check < 0) {
            $check += 10;
        }

        return implode('', $digits) . $check;
    }

    public function ipn(): string
    {
        return $this->rntrc();
    }

    /** @var string[] */
    protected array $cyrillicLetters = [
        'А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Е', 'Є', 'Ж', 'З', 'І', 'Ї', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ю', 'Я',
    ];

    public function initials(int $length = 2): string
    {
        if ($length < 1) {
            throw new ExtensionArgumentException('initials() $length must be at least 1');
        }

        $letters = [];
        for ($i = 0; $i < $length; ++$i) {
            $letters[] = $this->randomizer->randomElement($this->cyrillicLetters) . '.';
        }

        return implode(' ', $letters);
    }
}
