# Helpers for Laravel and Filament

Пакет преднозначен сократить написание строк кода в Resource FilamentPhp для дефолтных полей дат `created_at`, `updated_at` и других. 

Формат выводимой даты `j M Y H:i:s` `13 янв 2025 17:08:30`

- Placeholder
  - self::createdPlaceholder()
  - self::updatedPlaceholder()
  - self::columnDatetimePlaceholder('published_at', 'Опубликована')
- TextColumn
  - self::createTextColumn()
  - self::updateTextColumn()
  - self::columnDatetimeTextColumn('published_at', 'Опубликована')
- Filter
  - self::createdFilter(), 
  - self::updatedFilter(),
  - self::columnDatetimeFilter('published_at', 'Опубликована')

## Installation

Install the package with Composer:

    composer require maksde/helpers