<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

$moduleRoute = 'test-module';

Route::group(['prefix' => $moduleRoute], function (Router $router) {
    $router->resource('', 'TestController');
});
