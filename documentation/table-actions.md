# Действия таблицы

Готовые действия для метода `->actions()` / `->recordActions()` таблицы Filament (классы в `Maksde\Helpers\Filament\Resources\Tables\Actions`).

* [Просмотр](#просмотр)
* [Редактирование](#редактирование)
* [Удаление](#удаление)
* [Смена пароля](#смена-пароля)
* [Вход под пользователем (impersonate)](#вход-под-пользователем-impersonate)

---

### Просмотр

Иконка-кнопка с подсказкой «Просмотр». Обёртка над `Filament\Actions\ViewAction`.

```php
use Maksde\Helpers\Filament\Resources\Tables\Actions\ViewAction;

ViewAction::make()
```

---

### Редактирование

Иконка-кнопка с подсказкой «Редактировать». Обёртка над `Filament\Actions\EditAction`.

```php
use Maksde\Helpers\Filament\Resources\Tables\Actions\EditAction;

EditAction::make()
```

---

### Удаление

Иконка-кнопка с подсказкой «Удалить». Обёртка над `Filament\Actions\DeleteAction`.

```php
use Maksde\Helpers\Filament\Resources\Tables\Actions\DeleteAction;

DeleteAction::make()
```

---

### Смена пароля

Действие с подтверждением: поля пароля и подтверждения, опционально автогенерация пароля. Подписи и уведомления берутся из переводов пакета **filament-users**.

> **Зависимость:** необходим плагин [**tomatophp/filament-users**](https://github.com/tomatophp/filament-users). Установка:
>
> ```bash
> composer require tomatophp/filament-users
> ```
>
> Без этого пакета не будут доступны строки `filament-users::user.resource.*` и единообразное поведение с ресурсом пользователей.

```php
use Maksde\Helpers\Filament\Resources\Tables\Actions\ChangePassword;

ChangePassword::make()
```

---

### Вход под пользователем (impersonate)

Действие impersonate: использует трейт и логику из **tomatophp/filament-users**, настройки читает из `config('filament-users.impersonate.*')` (`auth_guard`, `redirect_to`, `back_to`).

> **Зависимость:** необходим плагин [**tomatophp/filament-users**](https://github.com/tomatophp/filament-users). Установка:
>
> ```bash
> composer require tomatophp/filament-users
> ```
>
> Опубликуйте и настройте конфиг пакета (раздел `impersonate`), иначе действие не сможет корректно переключать guard и редиректы.

```php
use Maksde\Helpers\Filament\Resources\Tables\Actions\ImpersonateAction;

ImpersonateAction::make()
```

Действие скрыто для записей, которые нельзя имперсонализировать (см. `canBeImpersonated()` в пакете).
