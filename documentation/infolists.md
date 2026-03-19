# Просмотр записи

**Просмотр записи** в Filament — это экран для чтения.

* [Заполнитель для даты и времени](#заполнитель-для-даты-и-времени)
* [Поля created_at (Добавлена) и updated_at (Отредактирована)](#поля-created_at-добавлена-и-updated_at-отредактирована)

---

### Заполнитель для даты и времени

На базе `TextEntry`: форматирует дату/время по шаблону из конфига, тултип с относительным временем (`sinceTooltip`), скрывает пустое значение. Для имён `created_at`, `updated_at`, `deleted_at` подпись можно не задавать — подставятся переводы пакета `helpers`.

![TimestampPlaceholder](https://raw.githubusercontent.com/demyanenkomaks/helpers/master/documentation/image/forms/TimestampPlaceholder.jpg)

Параметры:

`string $name` — название атрибута модели

`?string $label = null` — подпись

`int|string $columnSpan = 1` — ширина в сетке блока просмотра (Infolist)

`?string $format = null` — формат `translatedFormat()`; по умолчанию `config('helpers.format.timestamp')`

```php
use Maksde\Helpers\Filament\Resources\Schemas\Infolists\TimestampTextEntry;

TimestampTextEntry::make('published_at', 'Опубликована')
```

---

### Поля created_at (Добавлена) и updated_at (Отредактирована)

Возвращает массив из двух `TimestampTextEntry` для стандартных меток времени.

Параметры:

`int|string $columnSpan = 1` — ширина каждого компонента в сетке просмотра

```php
use Maksde\Helpers\Filament\Resources\Schemas\Infolists\CreateUpdateTextEntry;

->components([
    // ... другие записи
    ...CreateUpdateTextEntry::make(columnSpan: 1),
])
```
