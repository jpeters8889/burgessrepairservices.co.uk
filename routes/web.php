<?php

declare(strict_types=1);

use App\Http\Controllers\PageController;
use Illuminate\Routing\Router;

/* @var Router $router */

$router->get('/', [PageController::class, 'handle']);
$router->get('{path}', [PageController::class, 'handle']);
