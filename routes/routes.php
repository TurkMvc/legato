<?php
/**
 * Your application routes go here
 */
use Legato\Framework\Routing\Route;

Route::get('/', 'App\Controllers\IndexController@show');

Route::get('/user/{id}', function ($id) {
    echo 'Example route using closure '.$id;
});