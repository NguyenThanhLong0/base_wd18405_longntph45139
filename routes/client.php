<?php

use XuongOop\Salessa\Controllers\Client\HomeController;
use XuongOop\Salessa\Controllers\Client\AuthController;
use XuongOop\Salessa\Controllers\Client\RegisterController;
use XuongOop\Salessa\Controllers\Client\ProductDetailsController;

$router->get('/', HomeController::class . '@index');

$router->get('/auth/login',            AuthController::class . '@showFormLogin');
$router->post('/auth/handle-login',    AuthController::class . '@login');
$router->get('/auth/logout',           AuthController::class . '@logout');

$router->get('auth/register', RegisterController::class . '@showFormRegister');
$router->post('auth/register', RegisterController::class . '@register');

// hôm qua thêm
$router->get('/product/{id}', ProductDetailsController::class . '@show');

$router->get('/product/{id}', [ProductDetailsController::class, 'show']);
