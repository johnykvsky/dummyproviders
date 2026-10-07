# Changelog

---

## v0.3.0

* **75 Language Locales**: Expanded to 75 standalone, decoupled language packs with localized personal and business identifiers (tax IDs, national identity numbers, company registrations).
* **Regexify Utility**: Maintained standalone `Regexify` class with full test coverage for pattern generation.
* **Test Suite & Quality**: Added smoke tests for all 75 `DefinitionPack` classes and dedicated test suites for localized extensions (279 tests, 11,615 assertions).
* **Dependencies**: Added `ext-mbstring` requirement in `composer.json`.
* Removed **`Text` Extension**

---

## v0.2.0

Updated for DummyGenerator `v0.2.0`:
* removed `*Aware` traits and interfaces
* dependencies injected via constructor and `PHP-DI`

Beside that:
* added more tests
* small fixes here and there

---

## 0.0.1 ... 0.0.3

First "stable" releases for DummyGenerator <= `0.1.0`
