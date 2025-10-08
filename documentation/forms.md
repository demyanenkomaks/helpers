# Форма

* [Переключатель для поля типа boolean](#переключатель-для-поля-типа-boolean)
* [Дата](#дата)
* [Время](#время)
* [Дата и время](#дата-и-время)
* [Телефон](#телефон)
* [Заполнитель для даты и времени](#заполнитель-для-даты-и-времени)
* [Заполнители для полей created_at (Добавлена) и updated_at (Отредактирована)](#заполнители-для-полей-created_at-добавлена-и-updated_at-отредактирована)
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
use Maksde\Helpers\Filament\Resources\Schemas\BooleanToggleForm;

BooleanToggleForm::make('is_active', 'Активный')
```

### Дата

![DateForm](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/DateForm.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\DateForm;

DateForm::make('date', 'Дата')
```

### Время

![TimeForm](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/TimeForm.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\TimeForm;

TimeForm::make('time', 'Время')
```

### Дата и время

![DateTimeForm](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/DateTimeForm.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\DateTimeForm;

DateTimeForm::make('datetime', 'Дата и время')
```

### Телефон

![PhoneForm](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/PhoneForm.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\PhoneForm;

PhoneForm::make('phone', 'Телефон')
```

### Заполнитель для даты и времени

![TimestampPlaceholder](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/TimestampPlaceholder.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

`?string $format = null` - Формат отображения даты и времени, дефолтный указан в конфиге

```php
use Maksde\Helpers\Filament\Resources\Schemas\TimestampPlaceholder;

TimestampPlaceholder::make('published_at', 'Опубликована')
```

### Заполнители для полей created_at (Добавлена) и updated_at (Отредактирована)

Параметры:

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\CreateUpdateTextEntry;

...CreateUpdateTextEntry::make()
```

### Строковое поле со счетчиком символов

![StringCharCount](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/StringCharCount.jpg)

Параметры:

`string $name` - Название поля

`?string $label = null` - Подпись поля

`int $maxLength = 255` - Максимальное количество символов

`int|string $columnSpan = 1` - Сколько столбцов заполнит компонент в родительской сетке формы

```php
use Maksde\Helpers\Filament\Resources\Schemas\StringCharCount;

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
use Maksde\Helpers\Filament\Resources\Schemas\TextCharCount;

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
use Maksde\Helpers\Filament\Resources\Schemas\HtmlCharCount;

HtmlCharCount::make('text', 'Текст')
```
