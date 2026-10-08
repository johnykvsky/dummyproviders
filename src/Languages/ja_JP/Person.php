<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ja_JP;

use DummyGenerator\Core\Person as BasePerson;

class Person extends BasePerson
{
    protected array $maleNameFormats = [
        '{{lastName}} {{firstNameMale}}',
    ];

    protected array $femaleNameFormats = [
        '{{lastName}} {{firstNameFemale}}',
    ];

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%90%8D%E5%89%8D%E4%B8%80%E8%A6%A7
     * {@link} http://www.meijiyasuda.co.jp/enjoy/ranking/
     */
    protected array $firstNameMale = [
        '晃', '篤司', '治', '和也', '京助', '健一', '修平', '翔太', '淳', '聡太郎', '太一', '太郎', '拓真', '翼', '智也',
        '直樹', '直人', '英樹', '浩', '学', '充', '稔', '裕樹', '裕太', '康弘', '陽一', '洋介', '亮介', '涼平', '零',
    ];

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%90%8D%E5%89%8D%E4%B8%80%E8%A6%A7
     * {@link} http://www.meijiyasuda.co.jp/enjoy/ranking/
     */
    protected array $firstNameFemale = [
        '明美', 'あすか', '香織', '加奈', 'くみ子', 'さゆり', '知実', '千代',
        '直子', '七夏', '花子', '春香', '真綾', '舞', '美加子', '幹', '桃子', '結衣', '裕美子', '陽子', '里佳',
    ];

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E3%81%AE%E8%8B%97%E5%AD%97%28%E5%90%8D%E5%AD%97%29%E3%81%AE%E4%B8%80%E8%A6%A7
     */
    protected array $lastName = [
        '青田', '青山', '石田', '井高', '伊藤', '井上', '宇野', '江古田', '大垣',
        '加藤', '加納', '喜嶋', '木村', '桐山', '工藤', '小泉', '小林', '近藤',
        '斉藤', '坂本', '佐々木', '佐藤', '笹田', '鈴木', '杉山',
        '高橋', '田中', '田辺', '津田',
        '中島', '中村', '渚', '中津川', '西之園', '野村',
        '原田', '浜田', '廣川', '藤本',
        '松本', '三宅', '宮沢', '村山',
        '山岸', '山口', '山田', '山本', '吉田', '吉本',
        '若松', '渡辺',
    ];

    protected array $firstKanaNameFormat = [
        '{{firstKanaNameMale}}',
        '{{firstKanaNameFemale}}',
    ];

    protected array $maleKanaNameFormats = [
        '{{lastKanaName}} {{firstKanaNameMale}}',
    ];

    protected array $femaleKanaNameFormats = [
        '{{lastKanaName}} {{firstKanaNameFemale}}',
    ];

    protected array $firstKanaNameMale = [
        'アキラ', 'アツシ', 'オサム', 'カズヤ', 'キョウスケ', 'ケンイチ', 'シュウヘイ', 'ショウタ', 'ジュン', 'ソウタロウ',
        'タイチ', 'タロウ', 'タクマ', 'ツバサ', 'トモヤ', 'ナオキ', 'ナオト', 'ヒデキ', 'ヒロシ', 'マナブ', 'ミツル', 'ミノル',
        'ユウキ', 'ユウタ', 'ヤスヒロ', 'ヨウイチ', 'ヨウスケ', 'リョウスケ', 'リョウヘイ', 'レイ',
    ];

    protected array $firstKanaNameFemale = [
        'アケミ', 'アスカ', 'カオリ', 'カナ', 'クミコ', 'サユリ', 'サトミ', 'チヨ',
        'ナオコ', 'ナナミ', 'ハナコ', 'ハルカ', 'マアヤ', 'マイ', 'ミカコ', 'ミキ', 'モモコ', 'ユイ', 'ユミコ', 'ヨウコ', 'リカ',
    ];

    protected array $lastKanaName = [
        'アオタ', 'アオヤマ', 'イシダ', 'イダカ', 'イトウ', 'ウノ', 'エコダ', 'オオガキ',
        'カノウ', 'カノウ', 'キジマ', 'キムラ', 'キリヤマ', 'クドウ', 'コイズミ', 'コバヤシ', 'コンドウ',
        'サイトウ', 'サカモト', 'ササキ', 'サトウ', 'ササダ', 'スズキ', 'スギヤマ',
        'タカハシ', 'タナカ', 'タナベ', 'ツダ',
        'ナカジマ', 'ナカムラ', 'ナギサ', 'ナカツガワ', 'ニシノソノ', 'ノムラ',
        'ハラダ', 'ハマダ', 'ヒロカワ', 'フジモト',
        'マツモト', 'ミヤケ', 'ミヤザワ', 'ムラヤマ',
        'ヤマギシ', 'ヤマグチ', 'ヤマダ', 'ヤマモト', 'ヨシダ', 'ヨシモト',
        'ワカマツ', 'ワタナベ',
    ];

    /**
     * @param string|null $gender 'male', 'female' or null for any
     *
     * @example 'アオタ アキラ'
     */
    public function kanaName(?string $gender = null): string
    {
        if ($gender === static::GENDER_MALE) {
            $format = $this->randomizer->randomElement($this->maleKanaNameFormats);
        } elseif ($gender === static::GENDER_FEMALE) {
            $format = $this->randomizer->randomElement($this->femaleKanaNameFormats);
        } else {
            $format = $this->randomizer->randomElement(array_merge($this->maleKanaNameFormats, $this->femaleKanaNameFormats));
        }

        return $this->generator->parse($format);
    }

    /**
     * @param string|null $gender 'male', 'female' or null for any
     *
     * @example 'アキラ'
     */
    public function firstKanaName(?string $gender = null): string
    {
        if ($gender === static::GENDER_MALE) {
            return $this->firstKanaNameMale();
        }

        if ($gender === static::GENDER_FEMALE) {
            return $this->firstKanaNameFemale();
        }

        return $this->generator->parse($this->randomizer->randomElement($this->firstKanaNameFormat));
    }

    /** @example 'アキラ' */
    public function firstKanaNameMale(): string
    {
        return $this->randomizer->randomElement($this->firstKanaNameMale);
    }

    /** @example 'アケミ' */
    public function firstKanaNameFemale(): string
    {
        return $this->randomizer->randomElement($this->firstKanaNameFemale);
    }

    /** @example 'アオタ' */
    public function lastKanaName(): string
    {
        return $this->randomizer->randomElement($this->lastKanaName);
    }

    /**
     * Japanese Individual Number (My Number / 個人番号)
     * 12 digits with check digit.
     *
     * @example '123456789018'
     */
    public function myNumber(): string
    {
        $digits = '';
        for ($i = 0; $i < 11; $i++) {
            $digits .= (string) $this->randomizer->getInt(0, 9);
        }

        $weights = [6, 5, 4, 3, 2, 7, 6, 5, 4, 3, 2];
        $sum = 0;
        for ($i = 0; $i < 11; $i++) {
            $sum += ((int) $digits[$i]) * $weights[$i];
        }

        $rem = $sum % 11;
        $check = $rem <= 1 ? 0 : 11 - $rem;

        return $digits . $check;
    }

    /** @example '123456789018' */
    public function individualNumber(): string
    {
        return $this->myNumber();
    }
}
