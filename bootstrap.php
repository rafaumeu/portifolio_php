<?php

declare(strict_types = 1);
use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

$container->bind(Database::class, function () {
    $config = require base_path('config/config.php');

    return new Database($config['database']);
});

App::setContainer($container);
