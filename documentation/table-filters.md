# Фильтры таблицы

### Дата

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

```php
use Maksde\Helpers\Filament\Tables\Filters\TimestampFilter;

TimestampFilter::make('published_at', 'Опубликована')
```

### Фильтры для полей created_at (Добавлена) и updated_at (Отредактирована)

```php
use Maksde\Helpers\Filament\Tables\Filters\CreateUpdateFilters;

...CreateUpdateFilters::make()
```