# Помощник для Filament

![Version](http://poser.pugx.org/maksde/helpers/version)
![Packagist Downloads](https://img.shields.io/packagist/dt/maksde/helpers)
![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/maksde/helpers/php)
![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/maksde/helpers/filament%2Ffilament)
![Packagist License](https://img.shields.io/packagist/l/maksde/helpers)


Шаблоны для Resource FilamentPhp которые помогут сократить код для базово используемых компонентов форм, таблиц и фильтров таблиц.

## Установка

Установить пакет с помощью Composer:
```bash
composer require maksde/helpers
```

Опубликуйте файл конфигурации:
```bash
php artisan vendor:publish --tag="helpers-config"
```

Опубликовать файлы перевода:
```bash
php artisan vendor:publish --tag="helpers-lang"
```

## Шаблоны:

* [Форм](documentation/forms.md)
* [Таблиц](documentation/tables.md)
* [Фильтров таблиц](documentation/table-filters.md)
