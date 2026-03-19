# Форма

* [Переключатель для поля типа boolean](#переключатель-для-поля-типа-boolean)
* [Дата](#дата)
* [Время](#время)
* [Дата и время](#дата-и-время)
* [Телефон](#телефон)
* [Строковое поле со счетчиком символов](#строковое-поле-со-счетчиком-символов)
* [Текстовое поле со счетчиком символов](#текстовое-поле-со-счетчиком-символов)
* [Html поле со счетчиком символов](#html-поле-со-счетчиком-символов-richeditor)

### Переключатель для поля типа boolean

![BooleanToggleForm-off](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/BooleanToggleForm-off.jpg)
![BooleanToggleForm-on](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/BooleanToggleForm-on.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 'full'` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\Forms\BooleanToggleForm;

BooleanToggleForm::make('is_active', 'Активный')
```

### Дата

![DateForm](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/DateForm.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\Forms\DateForm;

DateForm::make('date', 'Дата')
```

### Время

![TimeForm](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/TimeForm.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\Forms\TimeForm;

TimeForm::make('time', 'Время')
```

### Дата и время

![DateTimeForm](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/DateTimeForm.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\Forms\DateTimeForm;

DateTimeForm::make('datetime', 'Дата и время')
```

### Телефон

![PhoneForm](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/PhoneForm.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\Forms\PhoneForm;

PhoneForm::make('phone', 'Телефон')
```

### Строковое поле со счетчиком символов

![StringCharCount](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/StringCharCount.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int $maxLength = 255` - Максимальное количество символов

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\Forms\StringCharCount;

StringCharCount::make('name', 'Имя')
```

### Текстовое поле со счетчиком символов

![TextCharCount](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/TextCharCount.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int $maxLength = 10000` - Максимальное количество символов

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\Forms\TextCharCount;

TextCharCount::make('text', 'Текст')
```

### Html поле со счетчиком символов (RichEditor)

![HtmlCharCount](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/HtmlCharCount.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int $maxLength = 10000` - Максимальное количество символов

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\Forms\HtmlCharCount;

HtmlCharCount::make('text', 'Текст')
```
