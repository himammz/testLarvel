<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return response()->make('hi i\'m here');
});


Route::get('/{event}', function ( $event) {
    dd(request());
});

Route::resource('post','postController');