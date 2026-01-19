<?php

declare(strict_types = 1);

use App\Controllers\IndexController;

use Core\Route;

$router = new Route();
$router->get('/', [IndexController::class, 'index']);

$router->run();
