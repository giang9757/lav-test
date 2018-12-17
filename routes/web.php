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
    return view('check');
});

Route::get('giang/{x}', function ($name) {
    echo $name;
});

Route::get('test/{k?}', function ($name='nguyễn trường giang') {
    echo $name;
});

Route::get('role',[

   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',

]);