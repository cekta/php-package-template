<?php

declare(strict_types=1);

use Testo\Application\Config\ApplicationConfig;
use Testo\Application\Config\SuiteConfig;
use Testo\Convention\NamingConventionPlugin;

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    // Преобразуем предупреждения (warnings), уведомления (notices) и ошибки пользователя (user-errors) в исключения
    if (in_array($errno, [E_WARNING, E_NOTICE, E_USER_WARNING, E_USER_NOTICE, E_DEPRECATED, E_USER_DEPRECATED], true)) {
        throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
    }
    return false;
});

return new ApplicationConfig(
    src: ["src"],
    suites: [new SuiteConfig(name: "Unit", location: ["tests"])],
    plugins: [
        new NamingConventionPlugin(),
    ],
);
