<?php

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/header.php';

use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\UserController;

// Criar router
$router = new Router();

// Definir rotas
$router->add('/', function () {
    $ctrl = new HomeController();
    echo $ctrl->index();
});

$router->add('/user', function () {
    $ctrl = new UserController();
    echo $ctrl->show();
});

// Executar
$router->dispatch($_SERVER['REQUEST_URI']);

require __DIR__ . '/footer.php';
