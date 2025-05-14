# Форма

### Переключатель для поля типа boolean

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 'full'` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\BooleanToggleForm;

BooleanToggleForm::make('is_active', 'Активный')
```

### Дата

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\DateForm;

DateForm::make('date', 'Дата')
```

### Время

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\TimeForm;

TimeForm::make('time', 'Время')
```

### Дата и время

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\DateTimeForm;

DateTimeForm::make('datetime', 'Дата и время')
```

### Телефон

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\PhoneForm;

PhoneForm::make('phone', 'Телефон')
```

### Заполнитель для даты и времени

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

`?string $format = null` - Формат отображения даты и времени, дефолтный указан в конфиге

```php
use Maksde\Helpers\Filament\Forms\Components\TimestampPlaceholder;

TimestampPlaceholder::make('published_at', 'Опубликована')
```

### Заполнители для полей created_at (Добавлена) и updated_at (Отредактирована)

Параметры:

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\CreateUpdatePlaceholders;

...CreateUpdatePlaceholders::make()
```