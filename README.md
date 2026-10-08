# DummyProviders

![logo][ico-logo]

This repository contains standalone, self-contained language providers for **DummyGenerator** across 75 locales:

| Region / Language | Supported Locales |
| --- | --- |
| **Arabic** | `ar_EG`, `ar_JO`, `ar_SA` |
| **Bulgarian / Bengali / Czech / Danish** | `bg_BG`, `bn_BD`, `cs_CZ`, `da_DK` |
| **German** | `at_AT`, `de_AT`, `de_CH`, `de_DE` |
| **Greek** | `el_CY`, `el_GR` |
| **English** | `en_AU`, `en_CA`, `en_GB`, `en_HK`, `en_IN`, `en_NG`, `en_NZ`, `en_PH`, `en_SG`, `en_UG`, `en_US`, `en_ZA` |
| **Spanish** | `es_AR`, `es_ES`, `es_PE`, `es_VE` |
| **Estonian / Persian / Finnish** | `et_EE`, `fa_IR`, `fi_FI` |
| **French** | `fr_BE`, `fr_CA`, `fr_CH`, `fr_FR` |
| **Hebrew / Croatian / Hungarian / Armenian** | `he_IL`, `hr_HR`, `hu_HU`, `hy_AM` |
| **Indonesian / Icelandic / Italian** | `id_ID`, `is_IS`, `it_CH`, `it_IT` |
| **Japanese / Georgian / Kazakh / Korean** | `ja_JP`, `ka_GE`, `kk_KZ`, `ko_KR` |
| **Lithuanian / Latvian / Montenegrin / Mongolian** | `lt_LT`, `lv_LV`, `me_ME`, `mn_MN` |
| **Malay / Norwegian / Nepali / Dutch** | `ms_MY`, `nb_NO`, `ne_NP`, `nl_BE`, `nl_NL` |
| **Polish / Portuguese / Romanian / Russian** | `pl_PL`, `pt_BR`, `pt_PT`, `ro_MD`, `ro_RO`, `ru_RU` |
| **Slovak / Slovenian / Serbian / Swedish** | `sk_SK`, `sl_SI`, `sr_Cyrl_RS`, `sr_Latn_RS`, `sr_RS`, `sv_SE` |
| **Thai / Turkish / Ukrainian / Vietnamese / Chinese** | `th_TH`, `tr_TR`, `uk_UA`, `vi_VN`, `zh_CN`, `zh_TW` |

## Installation

```shell
composer require johnykvsky/dummyproviders --dev
```

## Usage

For full info about DummyGenerator check [here](https://github.com/johnykvsky/dummygenerator).

The easiest way to add language providers is via the `DummyGenerator` factory method:

```php
use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_US\EnUsDefinitionPack;
use DummyGenerator\Provider\Languages\pl_PL\PlPlDefinitionPack;

$generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());
echo $generator->state(); // e.g. "Arkansas"
echo $generator->ssn(); // US SSN: "194-21-4588"
echo $generator->ein(); // US EIN: "33-3432139"

// Switch or chain providers (remember: DummyGenerator is immutable)
$generator = $generator->withProvider(new PlPlDefinitionPack());
echo $generator->pesel(); // Polish PESEL: "06311426636"
echo $generator->nip(); // Polish NIP: "9628136927"
echo $generator->licensePlate(); // e.g. "CIN O6UT"
```

Or via explicit container configuration:

```php
use DummyGenerator\Container\DiContainerFactory;
use DummyGenerator\DummyGenerator;
use DummyGenerator\Provider\Languages\en_US\EnUsDefinitionPack;

$container = DiContainerFactory::all()->withDefinitions((new EnUsDefinitionPack())->all());
$generator = new DummyGenerator($container);
echo $generator->state();
```

## Regexify

The `Regexify` utility is maintained in `src/Regexify.php` for backward-compatible pattern generation.

[ico-logo]: logo_d6.png