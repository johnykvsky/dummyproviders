# DummyProviders

This repository contains sample language providers for DummyGenerator:

* en_US
* en_GB
* pl_PL

## Installation

```shell
composer require johnykvsky/dummyproviders --dev
```

## Usage

Option 1, add language providers to container on generator initialization:
```php
$container = DefinitionContainerBuilder::all(); // initialize the container with core extensions
$en_US_pack = new DefinitionPack(); // en_US provider definitions pack
foreach ($en_US_pack->all() as $id => $class) { // add all extensions
    $container->add($id, $class);
}

$generator = new DummyGenerator($container); // create generator with providers
echo $generator->state(); // i.e. "Arkansas"
echo $generator->realText(); // it will give you part of ./resources/en_US.txt
```

Option 2, run method with given provider
```php
$container = DefinitionContainerBuilder::all(); // initialize the container with core extensions
$generator = new DummyGenerator($container); // create generator with no providers, core extensions are loaded

echo $generator->state(); // will throw an error, no such method in Address extension

echo $generator->withProvider(new DefinitionPack())->state(); // en_US provider is loaded, output will be i.e. "Arkansas"

echo $generator->state(); // will throw an error, no such method in Address extension
```

Option 3, same as number two, but better if you have more data to be generated for provider:
```php
$container = DefinitionContainerBuilder::all(); // initialize the container with core extensions
$generator = new DummyGenerator($container); // create generator with no providers, core extensions are loaded

$en_US_generator = $generator->withProvider(new DefinitionPack());
echo $en_US_generator->state(); // i.e. "Arkansas"
echo $en_US_generator->stateAbbr(); // i.e. "CA"
// $generator stays as it was before
```

## Text extension

Providers add one more extension: `Text`. It has only one method, `realText()` that allows you to generate text from passed string or given txt file.

By default txt files are in `resources` folder.

## Regexify

There is `Regexify` class in `src` folder, for compatibility - it's still being used in some providers
