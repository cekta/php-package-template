# CEKTA/PHP-PACKAGE-TEMPLATE

Это "стандартный" шаблон для создания пакета для composer,
который включает в себя базовый минимум необходимого и удобных инструментов для создания php пакета.

1. Настроенная автозагрузка классов в соответствие с [PSR-4](https://www.php-fig.org/psr/psr-4/).
2. Проверка code style на соответствие [PSR-12](https://www.php-fig.org/psr/psr-12/) с
   помощью [squizlabs/php_codesniffer](https://github.com/squizlabs/php_codesniffer).
3. Статический анализ [phpstan](https://phpstan.org/) с максимальным уровнем проверки (level 10).
4. Запуск автотестов с помощью [testo](https://php-testo.github.io/).
5. Запуск [infection](https://infection.github.io/) (мутационное тестирование оценивающие ваши автотесты) - можно
   отключить, опционально.
6. Из релизной версии пакета удалено все инструменты разработки, только /src и все необходимое.
7. Создание документации в markdown файлах и конвертация их с помощью [mdbook](https://rust-lang.github.io/mdBook/).
8. Пример pipeline который запускается CI/CD для каждого Merge Request и обновления master (только для **github**).
9. Запрет обновления master ветки, только Merge Request (только для **github**).
10. Окружение в docker для разработки, без необходимости ничего устанавливать.
    ```
    make test  # в текущей версии окружения
    ```
11. Есть возможность изменять версии php (8.2, 8.3, 8.4, 8.5).
    ```
    make test-8.5 # сменить текущую версию на php 8.5
    ```
12. Можно расширять поддержку новыми версиями и убирать не актуальные для вас.
13. Можно зайти в интерактивный shell разработки.
    ```
    make shell
    ```
14. Можно смотреть рендеринг документации до публикации.
    ```
    make docs
    ```
    Далее следуем инструкции открываем [http://localhost:3000](http://localhost:3000)
15. Установлен и настроек [xdebug](https://xdebug.org/) (вам надо лишь настроить IDE).

## Getting started

1. Для пользователей github.com используем шаблон проекта.
    1. Открываем страницу
       проекта [https://github.com/cekta/php-package-template](https://github.com/cekta/php-package-template).
    2. Нажимаем `Use this template`.
    3. Выбираем `Create a new repository`.
    4. Создаем репозиторий в нужном пользователи или организации.
2. Кастомизируем composer.json
    1. Указываем name вашего пакета vendor/package.
    2. Указываем description, license, authors и тд. (опционально).
    3. В разделе autoload и autoload-dev заменяем App на Vendor/Package вашего проекта.
3. Удаляем заглушки классов `/src/Example.php` и `/tests/ExampleTest.php`
4. Создаем свои классы и разрабатываем свой пакет.
5. Остальные настройки по желанию.

### Опциональные настройки.

К сожалению не все настройки можно сделать или перенести, а часть не могут иметь дефолтного значения, эти действия
являются опциональными:

1. Откройте github и выберите свой репозиторий -> `settings` вашего репозитория.
    1. Установите `Default commit message` -> `Pull request title and description` в **двух местах**.  
       Это позволит merge commit и squash коммит заполнять информации из `Pull Request` автоматически.
    2. В левом меню откройте раздел `Branches` добавьте `add rule` для вашей `master` ветки
    3. Отметьте `Require status checks to pass before merging `.
    4. Отметьте `Require branches to be up to date before merging `.
    5. Выберите с помощью строки поиска build (8.2), build (8.3), build(8.4) и тд.
       Без прохождения этих проверок не удасться влить PR.
    6. Отметьте `Lock branch `.
    7. Остальные настройки на свое усмотрение.
2. В файле /book.toml хранятся настройки [mdbook](https://rust-lang.github.io/mdBook/).
    1. Задайте authors.
    2. Укажите TITLE.
    3. Остальные настройки на свое усмотрение.
3. Можно регистрировать пакет на [packagist.org](https://packagist.org/packages/submit).

## Обратная связь и помощь проекту.

1. [GITHUB ISSUE](https://github.com/cekta/php-package-template/issues) для багов, предложений по улучшениям и тд.
2. [Чат в telegram](https://t.me/dev_ru).
3. Направляйте ваши Pull Request.
