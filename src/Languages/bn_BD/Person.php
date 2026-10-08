<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\bn_BD;

use DummyGenerator\Core\Person as BasePerson;

class Person extends BasePerson
{
    protected array $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    ];

    protected array $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    ];

    protected array $firstNameMale = [
        'অনন্ত', 'আব্দুল্লাহ', 'আহসান', 'ইমরুল', 'করিম', 'জলিল', 'বরকত', 'মাসনুন', 'রহিম', 'রিফাত', 'হাসনাত', 'হাসান',
    ];

    protected array $firstNameFemale = [
        'জারিন', 'জেরিন', 'ফারহানা', 'ফাহমেদা', 'মাহজাবিন', 'মেহনাজ', 'রহিমা', 'লাবনী', 'সাবরিন', 'সাবরিনা', 'হাসিন', 'রহমত',
    ];

    protected array $lastName = [
        'খান', 'শেখ', 'শিকদার', 'আলী', 'তাসনীম', 'তাবাসসুম',
    ];

    protected array $titleMale = ['মি.'];

    protected array $titleFemale = ['মিসেস.', 'মিস.'];
}
