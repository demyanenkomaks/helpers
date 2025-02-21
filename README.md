# Helpers for Laravel and Filament

Пакет преднозначен сократить написание строк кода в Resource FilamentPhp. 

## Установка

Install the package with Composer:

    composer require maksde/helpers

## Даты в Resource Filament `use Datetime;`

Дефолтный формат выводимой даты `j M Y H:i:s` `13 янв 2025 17:08:30`

- Placeholder - вывод в форме https://filamentphp.com/docs/3.x/forms/layout/placeholder
  - self::datetimePlaceholder($column, $label, $columnSpan, $format)
- TextColumn - вывод в списке
  - self::datetimeTextColumn($column, $label, $format)
- Filter - фильтр от до https://filamentphp.com/docs/3.x/tables/filters/custom#custom-filter-forms
  - self::datetimeFilter($column, $label)

## Toggle в Resource Filament `use Boolean;`

- Toggle - вывод в форме https://filamentphp.com/docs/3.x/forms/fields/toggle#customizing-the-color-of-the-toggle-button
  - self::toggleForm($column, $label, $columnSpan)
- ToggleColumn - вывод в списке https://filamentphp.com/docs/3.x/tables/columns/toggle
  - self::toggleColumn($column, $label, $columnSpan)
- IconColumn - вывод в списке https://filamentphp.com/docs/3.x/tables/columns/icon#handling-booleans
  - self::toggleIconColumn($column, $label, $columnSpan)