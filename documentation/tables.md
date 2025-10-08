# Таблица

* [Столбец id](#столбец-id)
* [Иконка для поля типа boolean](#иконка-для-поля-типа-boolean)
* [Переключатель для поля типа boolean](#переключатель-для-поля-типа-boolean)
* [E-mail](#e-mail)
* [Номер телефона](#номер-телефона)
* [Дата](#дата)
* [Время](#время)
* [Дата и время](#дата-и-время)
* [Столбцы created_at (Добавлена) и updated_at (Отредактирована)](#столбцы-created_at-добавлена-и-updated_at-отредактирована)

### Столбец id

Параметры:

`?string $name = 'id'` - Название столбца

`?string $label = null` - Подпись столбца

`bool $isToggledHiddenByDefault = true` - Столбец скрыт по умолчанию

```php
use Maksde\Helpers\Filament\Resources\Tables\Columns\IdColumn;

IdColumn::make()
```

### Иконка для поля типа boolean

![BooleanIconColumn](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/tables/BooleanIconColumn.jpg)

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

`bool $isToggledHiddenByDefault = false` - Столбец скрыт по умолчанию

```php
use Maksde\Helpers\Filament\Resources\Tables\Columns\BooleanIconColumn;

BooleanIconColumn::make('is_active', 'Активный')
```

### Переключатель для поля типа boolean

![BooleanToggleColumn](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/tables/BooleanToggleColumn.jpg)

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

`bool $isToggledHiddenByDefault = false` - Столбец скрыт по умолчанию

```php
use Maksde\Helpers\Filament\Resources\Tables\Columns\BooleanToggleColumn;

BooleanToggleColumn::make('is_active', 'Активный')
```

### E-mail

![EmailColumn](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/tables/EmailColumn.jpg)

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

```php
use Maksde\Helpers\Filament\Resources\Tables\Columns\EmailColumn;

EmailColumn::make('email', 'E-mail')
```

### Номер телефона

![PhoneColumn](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/tables/PhoneColumn.jpg)

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

`?string $format = null` - Формат отображения номера телефона, дефолтный указан в конфиге

```php
use Maksde\Helpers\Filament\Resources\Tables\Columns\PhoneColumn;

PhoneColumn::make('phone', 'Номер телефона')
```

### Дата

![DateColumn](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/tables/DateColumn.jpg)

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

`?string $format = null` - Формат отображения даты, дефолтный указан в конфиге

```php
use Maksde\Helpers\Filament\Resources\Tables\Columns\DateColumn;

DateColumn::make('date', 'Дата')
```

### Время

![TimeColumn](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/tables/TimeColumn.jpg)

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

`?string $format = null` - Формат отображения времени, дефолтный указан в конфиге

```php
use Maksde\Helpers\Filament\Resources\Tables\Columns\TimeColumn;

TimeColumn::make('time', 'Время')
```


### Дата и время

![TimestampColumn](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/tables/TimestampColumn.jpg)

Параметры:

`string $name` - Название столбца

`?string $label = null` - Подпись столбца

`bool $isToggledHiddenByDefault = false` - Столбец скрыт по умолчанию

`?string $format = null` - Формат отображения даты и времени, дефолтный указан в конфиге

```php
use Maksde\Helpers\Filament\Resources\Tables\Columns\TimestampColumn;

TimestampColumn::make('datetime', 'Дата и время')
```

### Столбцы created_at (Добавлена) и updated_at (Отредактирована)

```php
use Maksde\Helpers\Filament\Resources\Tables\Columns\CreateUpdateColumns;

...CreateUpdateColumns::make()
```