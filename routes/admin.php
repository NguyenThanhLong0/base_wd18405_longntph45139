<?php

use XuongOop\Salessa\Controllers\Admin\DashboardController;
use XuongOop\Salessa\Controllers\Admin\ProductController;
use XuongOop\Salessa\Controllers\Admin\CategorieController;
use XuongOop\Salessa\Controllers\Admin\UserController;

// đong lai đe/admin (check cho admin)
$router->before('GET|POST', '/admin/*.*', function() {

    if (!is_logged()) {
        header('location: ' . url('auth/login') );
        exit();
    } 

    if (!is_admin()) {
        header('location: ' . url() );
        exit();
    }

});
// đong lai đe/admin

$router->mount('/admin', function () use ($router) {

    $router->get('/', DashboardController::class . '@dashboard');

    // CRUD Product
    $router->mount('/products', function () use ($router) {
        $router->get('/',               ProductController::class . '@index');  // Danh sách
        $router->get('/create',         ProductController::class . '@create'); // Show form thêm mới
        $router->post('/store',         ProductController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      ProductController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      ProductController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   ProductController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    ProductController::class . '@delete'); // Xóa
    });

    // CRUD categorie
    $router->mount('/categories', function () use ($router) {
        $router->get('/',               CategorieController::class . '@index');  // Danh sách
        $router->get('/create',         CategorieController::class . '@create'); // Show form thêm mới
        $router->post('/store',         CategorieController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      CategorieController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      CategorieController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   CategorieController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    CategorieController::class . '@delete'); // Xóa
    });

    // CRUD User
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');  // Danh sách
        $router->get('/create',         UserController::class . '@create'); // Show form thêm mới
        $router->post('/store',         UserController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      UserController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      UserController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   UserController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    UserController::class . '@delete'); // Xóa
    });
});
