# Форма

### Переключатель для поля типа boolean

Параметры:

`string $name` - название поля

`?string $label = null` - подпись поля

`int|string $columnSpan = 'full'` - сколько столбцов должен заполнять компонент поля в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\BooleanToggleForm;

BooleanToggleForm::make('is_active', 'Активный')
```

### Дата

Параметры:

`string $name` - название поля

`?string $label = null` - подпись поля

`int|string $columnSpan = 1` - сколько столбцов должен заполнять компонент поля в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\DateForm;

DateForm::make('date', 'Дата')
```

### Время

Параметры:

`string $name` - название поля

`?string $label = null` - подпись поля

`int|string $columnSpan = 1` - сколько столбцов должен заполнять компонент поля в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\TimeForm;

TimeForm::make('time', 'Время')
```

### Дата и время

Параметры:

`string $name` - название поля

`?string $label = null` - подпись поля

`int|string $columnSpan = 1` - сколько столбцов должен заполнять компонент поля в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\DateTimeForm;

DateTimeForm::make('datetime', 'Дата и время')
```

### Телефон

Параметры:

`string $name` - название поля

`?string $label = null` - подпись поля

`int|string $columnSpan = 1` - сколько столбцов должен заполнять компонент поля в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\PhoneForm;

PhoneForm::make('phone', 'Телефон')
```

### Заполнитель для даты и времени

Параметры:

`string $name` - название поля

`?string $label = null` - подпись поля

`int|string $columnSpan = 1` - сколько столбцов должен заполнять компонент поля в родительской сетке формы

`?string $format = null` - формат отображения даты и времени, можно указать в конфиге

```php
use Maksde\Helpers\Filament\Forms\Components\TimestampPlaceholder;

TimestampPlaceholder::make('published_at', 'Опубликована')
```

### Заполнители для полей created_at (Добавлена) и updated_at (Отредактирована)

Параметры:

`int|string $columnSpan = 1` - сколько столбцов должен заполнять компонент поля в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\CreateUpdatePlaceholders;

...CreateUpdatePlaceholders::make()
```