# Форма

* [Переключатель для поля типа boolean](#переключатель-для-поля-типа-boolean)
* [Дата](#дата)
* [Время](#время)
* [Дата и время](#дата-и-время)
* [Телефон](#телефон)
* [Заполнитель для даты и времени](#заполнитель-для-даты-и-времени)
* [Заполнители для полей created_at (Добавлена) и updated_at (Отредактирована)](#заполнители-для-полей-created_at-добавлена-и-updated_at-отредактирована)
* [Строковое поле с счетчиком символов](#строковое-поле-с-счетчиком-символов)
* [Текстовое поле с счетчиком символов](#текстовое-поле-с-счетчиком-символов)
* [Html поле с счетчиком символов](#html-поле-с-счетчиком-символов-richeditor)

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

### Строковое поле с счетчиком символов

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int $maxLength = 255` - Максимальное количество символов

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\StringCharCount;

StringCharCount::make('name', 'Имя')
```

### Текстовое поле с счетчиком символов

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int $maxLength = 10000` - Максимальное количество символов

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\TextCharCount;

TextCharCount::make('text', 'Текст')
```

### Html поле с счетчиком символов (RichEditor)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int $maxLength = 10000` - Максимальное количество символов

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Forms\Components\HtmlCharCount;

HtmlCharCount::make('text', 'Текст')
```
