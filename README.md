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

## Localized Identifiers & Methods

Each localized provider implements specific, real-world identification numbers and methods for its region directly without generic shortcuts:

### Personal & National Identifiers
Call the specific method directly on the generator:
* `pl_PL`: `->pesel()`, `->dowodOsobisty()` (Polish Identity Card)
* `en_US`: `->ssn()` (US Social Security Number)
* `en_GB`: `->nino()` (UK National Insurance Number), `->utr()` (HMRC Unique Taxpayer Reference)
* `de_DE`: `->steuerId()` / `->taxId()` (German Steuerliche Identifikationsnummer), `->steuernummer()` (Steuernummer)
* `fr_FR`: `->nir()` (French NIR / social security number)
* `es_ES`: `->dni()` (Spanish DNI), `->nie()` (Spanish NIE for foreigners)
* `es_PE`: `->dni()` (Peruvian DNI)
* `it_IT`, `it_CH`: `->codiceFiscale()` / `->taxId()` (Italian Fiscal Code)
* `nl_NL`: `->bsn()` (Dutch Burgerservicenummer)
* `en_AU`: `->tfn()` (Australian Tax File Number), `->medicare()` (Medicare Card Number)
* `en_CA`: `->sin()` (Canadian Social Insurance Number)
* `fr_CA`: `->sin()` / `->nas()` (Numéro d'assurance sociale)
* `ja_JP`: `->myNumber()` / `->individualNumber()` (Japanese Individual Number / マイナンバー)
* `zh_CN`: `->residentId()` / `->idCard()` (Chinese Resident Identity Card Number / 居民身份证号码)
* `ko_KR`: `->rrn()` / `->residentRegistrationNumber()` (South Korean Resident Registration Number / 주민등록번호)
* `en_IN`: `->pan()` (Indian PAN), `->aadhaar()` (Indian Aadhaar Number)
* `tr_TR`: `->tcNo()` (Turkish TC Kimlik No)
* `sk_SK`: `->birthNumber()` / `->rodneCislo()` (Slovak Rodné číslo)
* `cs_CZ`: `->birthNumber()` (Czech Rodné číslo)
* `uk_UA`: `->rntrc()` / `->ipn()` (Ukrainian Taxpayer Number / РНОКПП / ІПН)
* `da_DK`: `->cpr()` (Danish CPR)
* `de_CH`, `fr_CH`, `it_CH`: `->avs13()` / `->ahv13()` (Swiss AHV/AVS number)
* `pt_BR`: `->cpf()` (Brazilian CPF)
* `en_SG`: `->nric()` (Singapore NRIC)
* `id_ID`: `->nik()` (Indonesian NIK)
* `ro_RO`: `->cnp()` (Romanian CNP)
* `nl_BE`, `fr_BE`: `->rrn()` (Belgian National Register Number)

### Company & Business Tax Identifiers
* `pl_PL`: `->nip()` (Polish NIP), `->regon()`, `->regonLocal()`, `->krs()` (National Court Register)
* `en_US`: `->ein()` (US Employer Identification Number)
* `en_GB`: `->vat()` (UK VAT), `->crn()` / `->companyNumber()` (Companies House Company Number)
* `de_DE`: `->ustIdNr()` / `->vatId()` (German Umsatzsteuer-Identifikationsnummer), `->handelsregisternummer()` (Handelsregister)
* `fr_FR`: `->siren()`, `->siret()`, `->tva()` / `->vat()` (French TVA intracommunautaire)
* `es_ES`: `->cif()` (Spanish Código de Identificación Fiscal)
* `de_AT`: `->uid()` / `->vatId()` (Austrian UID), `->firmenbuchnummer()` (Firmenbuch)
* `de_CH`, `fr_CH`, `it_CH`: `->uid()` / `->ide()` (Swiss Business Identification Number / UID / IDE)
* `nl_NL`: `->kvk()` / `->kvkNumber()` (Dutch Chamber of Commerce number), `->vat()`
* `en_AU`: `->acn()` (Australian Company Number), `->abn()` (Australian Business Number)
* `en_CA`: `->bn()` (Canadian Business Number)
* `fr_CA`: `->bn()` / `->ne()` (Numéro d'entreprise)
* `sv_SE`: `->organisationsnummer()` / `->organisationNumber()`, `->vat()` / `->moms()` (Swedish Moms)
* `nb_NO`: `->organisasjonsnummer()` / `->organisationNumber()`, `->mva()` (Norwegian MVA)
* `fi_FI`: `->businessId()` / `->yTunnus()`, `->alv()` / `->vat()` (Finnish ALV)
* `sk_SK`: `->ico()` (Slovak IČO), `->dic()` (DIČ), `->icDph()` (IČ DPH)
* `cs_CZ`: `->ico()` (Czech IČO), `->dic()` (Czech DIČ)
* `nl_BE`, `fr_BE`: `->kbo()` / `->bce()` (Belgian Enterprise Number), `->vat()`, `->siren()` (`fr_BE`)
* `uk_UA`: `->edrpou()` (Ukrainian EDRPOU code / ЄДРПОУ)
* `ja_JP`: `->corporateNumber()` / `->houjinBangou()` (Japanese Corporate Number / 法人番号)
* `zh_CN`: `->uscc()` (Chinese Unified Social Credit Code / 统一社会信用代码)
* `ko_KR`: `->brn()` / `->businessRegistrationNumber()` (South Korean Business Registration Number / 사업자등록번호)
* `en_IN`: `->gstin()` (Indian GSTIN), `->cin()` (Indian Corporate Identification Number)
* `tr_TR`: `->vkn()` (Turkish Vergi Kimlik Numarası)
* `pt_BR`: `->cnpj()` (Brazilian CNPJ)
* `ru_RU`: `->inn10()`, `->kpp()`
* `da_DK`: `->cvr()` (Danish CVR)
* `zh_TW`: `->VAT()` (Taiwan VAT)

## Architecture

* **Decoupled & Self-Contained**: Every locale provider directly extends `DummyGenerator\Core\*`. There are zero cross-locale dependencies between sibling locales (e.g. `fr_BE`, `fr_CH`, `de_CH`, `it_CH`, `en_CA` are completely independent).
* **Strict Typing & Clean OOP**: Fully compliant with PHP 8.3+, PSR-12, and strict typing. Legacy procedural scripts and helpers have been replaced by clean class-based methods.

## Text Extension & In-Memory Default Text

The `Text` extension provides realistic sentence and paragraph generation (`realText()`).

Unlike legacy implementations that relied on external `.txt` files (consuming megabytes of disk space and requiring runtime `file_get_contents()` filesystem access), **DummyProviders** embeds public-domain literary text directly as an in-memory PHP class ([`DefaultText`](src/Resources/DefaultText.php)) implementing [`DefaultTextInterface`](src/Resources/DefaultTextInterface.php):
* **OPcache-friendly**: Precompiled into PHP OPcache for instant execution with zero disk I/O.
* **PHP-DI autowiring**: Loaded and autowired via PHP-DI (`#[Inject(DefaultText::class)]`) rather than hardcoded.
* **Swappable on the fly**: Users can easily replace the text corpus on the fly:
  ```php
  // 1. Using a custom subclass
  $generator = $generator->withDefinition(DefaultText::class, MyCustomText::class);

  // 2. Using a class implementing DefaultTextInterface
  $generator = $generator->withDefinition(DefaultText::class, MyMarkovCorpus::class);

  // 3. Passing an inline configured instance
  $generator = $generator->withDefinition(DefaultText::class, new DefaultText('Custom sample text for Markov chains...'));

  // 4. Using a factory closure
  $generator = $generator->withDefinition(DefaultText::class, fn () => new DefaultText(file_get_contents('/path/to/book.txt')));
  ```
* **Backwards-compatible**: Direct instantiation via constructor (`new Text($randomizer, $replacer, $customText)`) is also fully supported.

### Why only English text is bundled

DummyProviders intentionally bundles only the default English text corpus, and there are no plans to include bundled text inputs for other languages:
1. **Project size**: Including text corpora for dozens of languages would significantly bloat the repository, vendor directory, and download size.
2. **Copyright & licensing**: I have no control over the copyright status and licensing of external texts in various languages, making copyright compliance difficult to guarantee.

If you need `realText()` in other languages, you can supply your own custom corpus via `withDefinition(DefaultText::class, ...)` as shown above.

## Regexify

The `Regexify` utility is maintained in `src/Regexify.php` for backward-compatible pattern generation.

## Test Suite Audit & Coverage Improvements

As part of a comprehensive 4-phase test suite audit, test coverage was systematically expanded across providers and core utilities:

### Phase 1: Deprecations & PHP 8.5 Compatibility
* Removed deprecated `setAccessible(true)` reflection calls in `PlPlLicensePlateTest` and `EnGbCompanyTest`.
* Promoted constructor parameters in `src/Languages/en_CA/PhoneNumber.php` to prevent dynamic property creation deprecation notices.

### Phase 3: Core Provider Tests & Smoke Coverage
* **`RegexifyTest`**: Added 16 comprehensive unit tests covering character classes (`\d`, `\w`, `[a-z]`), quantifiers (`{n}`, `{n,m}`, `?`, `*`, `+`), anchors (`^`, `$`), escaping, and invalid regex handling.
* **All 75 DefinitionPacks Parameterized Smoke Test**: Implemented a parameterized test in `DefinitionPackTest` covering every single one of the 75 `DefinitionPack` classes to ensure they instantiate, register in the DI container without conflicts, and resolve all registered extension classes.
* Added unit tests for `pl_PL\Payment::addBankCodeChecksum()`.

### Phase 4: Systematic Localized Extension Tests
Added dedicated unit test suites covering national identification numbers, tax IDs, company registration numbers, and phone formats for 21 previously untested locales, plus expanded tests for existing ones:
* `ar_EG` (`ArEgTest`): National ID, Company Tax ID, Trade Register number
* `ar_SA` (`ArSaTest`): National ID, Foreigner ID, Company ID
* `da_DK` (`DaDkTest`): CPR, CVR, Middle Name
* `en_SG` (`EnSgTest`): NRIC, FIN, Singapore ID, mobile & fixed numbers
* `en_ZA` (`EnZaTest`): ID number, License code, Company number
* `es_PE` (`EsPeTest`): DNI, RUC, Suffix
* `es_VE` (`EsVeTest`): National ID, RIF / Taxpayer ID, Company prefix
* `fa_IR` (`FaIrTest`): National code with checksum verification, Mobile number
* `id_ID` (`IdIdTest`): NIK with gender day offset, Male/Female last names
* `is_IS` (`IsIsTest`): Kennitala SSN, Patronymic/Matronymic names, VSK
* `kk_KZ` (`KkKzTest`): Individual Identification Number (IIN) with checksum, Business Identification Number (BIN)
* `lt_LT` (`LtLtTest`): Personal code with gender/century encoding, Driver license, Passport number
* `lv_LV` (`LvLvTest`): Personas kods with century encoding, Driver license, Passport number
* `mn_MN` (`MnMnTest`): ID number (Cyrillic format), Alphabet, Name prefix
* `ms_MY` (`MsMyTest`): MyKad with gender parity, Mobile/Fixed/VoIP numbers
* `pt_BR` (`PtBrTest`): CPF, RG, CNPJ, Area code, Cellphone, Landline
* `pt_PT` (`PtPtTest`): Taxpayer Identification Number (NIF), Mobile number
* `ro_RO` (`RoRoTest`): CNP, Phone numbers
* `ru_RU` (`RuRuTest`): INN 10-digit with checksum, KPP, Patronymics
* `th_TH` (`ThThTest`): SSN, Mobile number
* `zh_TW` (`ZhTwTest`): Personal Identity Number with gender code, VAT
* Expanded existing suites: `nl_BE` (`BeTest` for `rrn`), `nl_NL` (`NlNlTest` for `idNumber`, `vat`, `btw`), `sv_SE` (`SvSeTest` for `personalIdentityNumber`, `mobileNumber`, `municipality`), `tr_TR` (`TrTrTest` for `tcNo` and `tcNoIsValid`).

**Test Suite Status**: 279 tests, 11,615 assertions, 0 errors, 0 failures.

[ico-logo]: logo_d6.png