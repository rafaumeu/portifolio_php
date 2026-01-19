<?php 
declare(strict_types= 1);

use Core\Route;

use App\Controllers\IndexController;

$router = new Route();
$router->get('/', [IndexController::class, 'index']);

$router->run();