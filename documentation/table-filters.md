# Фильтры таблицы

* [Дата (диапазон «от — до»)](#дата-диапазон-от--до)
* [Фильтры для полей created_at (Добавлена) и updated_at (Отредактирована)](#фильтры-для-полей-created_at-добавлена-и-updated_at-отредактирована)

### Дата (диапазон «от — до»)

Фильтр с двумя полями даты: ограничение записей по столбцу через `whereDate` (>= и <=). Для имён `created_at`, `updated_at`, `deleted_at` подпись подставляется из переводов пакета `helpers`, если не передать `$label`.

![TimestampFilter](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/table-filters/TimestampFilter.jpg)

Параметры:

`string $name` — имя столбца в БД (**обязательный**)

`?string $label = null` — базовая подпись столбца; если не задана, для `created_at` / `updated_at` / `deleted_at` подставляются переводы `helpers.timestamp.*`, иначе используется `$name`. Метки полей диапазона задаются строками `helpers.filter.timestamp_from` и `helpers.filter.timestamp_until` (плейсхолдер `:label`).

```php
use Maksde\Helpers\Filament\Resources\Tables\Filters\TimestampFilter;

TimestampFilter::make('published_at', 'Опубликована')
```

### Фильтры для полей created_at (Добавлена) и updated_at (Отредактирована)

Два `TimestampFilter` для `created_at` и `updated_at`.

![CreateUpdateFilters](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/table-filters/CreateUpdateFilters.jpg)

```php
use Maksde\Helpers\Filament\Resources\Tables\Filters\CreateUpdateFilters;

->filters([
    ...CreateUpdateFilters::make(),
])
```