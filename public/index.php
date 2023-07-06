<?php

use App\Controllers\ProductController;
use App\Request;
use App\Router;



require_once __DIR__ . "/../vendor/autoload.php";

$router = new Router();

Router::get('/', [ProductController::class, 'index']);
Router::get('/create-product', [ProductController::class, 'store']);
Router::post('/create-product', [ProductController::class, 'create']);
Router::get('/delete-product',[ProductController::class,'delete']);
Router::get('/update-product', [ProductController::class, 'show']);
Router::post('/update-product', [ProductController::class, 'update']);

$router->resolve();
