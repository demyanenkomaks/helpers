# Фильтры таблицы

* [Дата](#дата)
* [Фильтры для полей created_at (Добавлена) и updated_at (Отредактирована)](#фильтры-для-полей-created_at-добавлена-и-updated_at-отредактирована)

### Дата

![TimestampFilter](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/table-filters/TimestampFilter.jpg)

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

```php
use Maksde\Helpers\Filament\Resources\Tables\Filters\TimestampFilter;

TimestampFilter::make('published_at', 'Опубликована')
```

### Фильтры для полей created_at (Добавлена) и updated_at (Отредактирована)

![CreateUpdateFilters](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/table-filters/CreateUpdateFilters.jpg)

```php
use Maksde\Helpers\Filament\Resources\Tables\Filters\CreateUpdateFilters;

...CreateUpdateFilters::make()
```