<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Wave\Http\Controllers\API\ApiController;
use Wave\Http\Controllers\API\AuthController;

// Auth
Route::controller(AuthController::class)
    ->group(function (Router $router) {
        $router->post('/login', 'login');
        $router->post('/register', 'register');
        $router->post('/logout', 'logout');
        $router->post('/refresh', 'refresh');
        $router->post('/token', 'token');
    });

// BREAD
Route::controller(ApiController::class)
    ->group(function (Router $router) {
        $router->get('/{datatype}', 'browse');
        $router->get('/{datatype}/{id}', 'read');
        $router->post('/{datatype}/{id}', 'edit');
        $router->post('/{datatype}', 'add');
        $router->delete('/{datatype}/{id}', 'delete');
    });
