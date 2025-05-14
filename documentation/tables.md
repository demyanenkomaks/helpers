# Таблица

### Столбец id

Параметры:

`?string $name = 'id'` - Название столбца

`?string $label = null` - Подпись столбца

`bool $isToggledHiddenByDefault = true` - Столбец скрыт по умолчанию

```php
use Maksde\Helpers\Filament\Tables\Columns\IdColumn;

IdColumn::make()
```

### Иконка для поля типа boolean

Параметры:

`string $name` - Название столбеца

`?string $label = null` - Подпись столбца

`bool $isToggledHiddenByDefault = false` - Столбец скрыт по умолчанию

```php
use Maksde\Helpers\Filament\Tables\Columns\BooleanIconColumn;

BooleanIconColumn::make('is_active', 'Активный')
```

### Переключатель для поля типа boolean

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

`bool $isToggledHiddenByDefault = false` - Столбец скрыт по умолчанию

```php
use Maksde\Helpers\Filament\Tables\Columns\BooleanToggleColumn;

BooleanToggleColumn::make('is_active', 'Активный')
```

### E-mail

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

```php
use Maksde\Helpers\Filament\Tables\Columns\EmailColumn;

EmailColumn::make('email', 'E-mail')
```

### Номер телефона

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

`?string $format = null` - Формат отображения номера телефона, дефолтный указан в конфиге

```php
use Maksde\Helpers\Filament\Tables\Columns\PhoneColumn;

PhoneColumn::make('phone', 'Номер телефона')
```

### Дата

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

`?string $format = null` - Формат отображения даты, дефолтный указан в конфиге

```php
use Maksde\Helpers\Filament\Tables\Columns\DateColumn;

DateColumn::make('date', 'Дата')
```

### Время

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

`?string $format = null` - Формат отображения времени, дефолтный указан в конфиге

```php
use Maksde\Helpers\Filament\Tables\Columns\TimeColumn;

TimeColumn::make('time', 'Время')
```


### Дата и время

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

`bool $isToggledHiddenByDefault = false` - Столбец скрыт по умолчанию

`?string $format = null` - Формат отображения даты и времени, дефолтный указан в конфиге

```php
use Maksde\Helpers\Filament\Tables\Columns\TimestampColumn;

TimestampColumn::make('datetime', 'Дата и время')
```

### Стоблцы created_at (Добавлена) и updated_at (Отредактирована)

```php
use Maksde\Helpers\Filament\Tables\Columns\CreateUpdateColumns;

...CreateUpdateColumns::make()
```