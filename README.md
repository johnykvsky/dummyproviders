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

For full info about DummyGenerator check go [here](https://github.com/johnykvsky/dummygenerator)

Easiest way to add language providers is to go with `DummyGenerator` factory method:

```php
$generator = DummyGenerator::create()->withProvider(new EnUsDefinitionPack());
```

But it can be also done with explicit container usage:

```php
$container = DiContainerFactory::all();
$generator = new DummyGenerator($container)
$generator = $generator->withProvider(new EnUsDefinitionPack());
echo $generator->state(); // i.e. "Arkansas"
echo $generator->realText(); // it will give you part of ./resources/en_US.txt
```

## Text extension

Providers add one more extension: `Text`. It has only one method, `realText()` that allows you to generate text from passed string or given txt file.

Text extension is a bit different for one reason - it uses external `.txt` file as source to large text. By default, it's in `resources/en_US.txt` but you can either:

* pass text to `Text` constructor (i.e. `$text = new Text(file_get_contents('my_file.txt'));`)
* extend `Text` class and use different location in `$defaultText` property

## Regexify

There is `Regexify` class in `src` folder, for compatibility - it's still being used in some providers
