# Таблица

### Столбец id

Параметры:

`?string $name = 'id'` - название столбца

`?string $label = null` - подпись столбца

`bool $isToggledHiddenByDefault = true` - столбец скрыт по умолчанию

```php
use Maksde\Helpers\Filament\Tables\Columns\IdColumn;

IdColumn::make()
```

### Иконка для поля типа boolean

Параметры:

`string $name` - название столбец

`?string $label = null` - подпись поля

`bool $isToggledHiddenByDefault = false` - столбец скрыт по умолчанию

```php
use Maksde\Helpers\Filament\Tables\Columns\BooleanIconColumn;

BooleanIconColumn::make('is_active', 'Активный')
```

### Переключатель для поля типа boolean

Параметры:

`string $name` - название столбца

`?string $label = null` - подпись столбца

`bool $isToggledHiddenByDefault = false` - столбец скрыт по умолчанию

```php
use Maksde\Helpers\Filament\Tables\Columns\BooleanToggleColumn;

BooleanToggleColumn::make('is_active', 'Активный')
```

### E-mail

Параметры:

`string $name` - название столбца

`?string $label = null` - подпись столбца

```php
use Maksde\Helpers\Filament\Tables\Columns\EmailColumn;

EmailColumn::make('email', 'E-mail')
```

### Номер телефона

Параметры:

`string $name` - название столбца

`?string $label = null` - подпись столбца

`?string $format = null` - формат отображения номера телефона, можно указать в конфиге

```php
use Maksde\Helpers\Filament\Tables\Columns\PhoneColumn;

PhoneColumn::make('phone', 'Номер телефона')
```

### Дата

Параметры:

`string $name` - название столбца

`?string $label = null` - подпись столбца

`?string $format = null` - формат отображения даты, можно указать в конфиге

```php
use Maksde\Helpers\Filament\Tables\Columns\DateColumn;

DateColumn::make('date', 'Дата')
```

### Время

Параметры:

`string $name` - название столбца

`?string $label = null` - подпись столбца

`?string $format = null` - формат отображения времени, можно указать в конфиге

```php
use Maksde\Helpers\Filament\Tables\Columns\TimeColumn;

TimeColumn::make('time', 'Время')
```


### Дата и время

Параметры:

`string $name` - название столбца

`?string $label = null` - подпись столбца

`bool $isToggledHiddenByDefault = false` - столбец скрыт по умолчанию

`?string $format = null` - формат отображения даты и времени, можно указать в конфиге

```php
use Maksde\Helpers\Filament\Tables\Columns\TimestampColumn;

TimestampColumn::make('datetime', 'Дата и время')
```

### Стоблцы created_at (Добавлена) и updated_at (Отредактирована)

```php
use Maksde\Helpers\Filament\Tables\Columns\CreateUpdateColumns;

...CreateUpdateColumns::make()
```