<?php

use XuongOop\Salessa\Controllers\Client\HomeController;
use XuongOop\Salessa\Controllers\Client\AuthController;
use XuongOop\Salessa\Controllers\Client\RegisterController;
use XuongOop\Salessa\Controllers\Client\ProductDetailsController;
use XuongOop\Salessa\Controllers\Client\ProductListController;

$router->get('/', HomeController::class . '@index');

$router->get('/auth/login',            AuthController::class . '@showFormLogin');
$router->post('/auth/handle-login',    AuthController::class . '@login');
$router->get('/auth/logout',           AuthController::class . '@logout');

$router->get('auth/register', RegisterController::class . '@showFormRegister');
$router->post('auth/register', RegisterController::class . '@register');


$router->get('/product/{id}', ProductDetailsController::class . '@showDetail');
// $router->get('/producttop/{id}', ProductDetailsController::class . '@productTop');

$router->get('/products/list', ProductListController::class . '@indexs');
$router->get('/products/category/{id}', ProductListController::class . '@productsByCategory');

