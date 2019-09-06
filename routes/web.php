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
    return view('welcome');
});

Route::get("/test","indexController@index");
Route::any("/admin/login","Admin\loginController@login");
Route::any("/admin/loginout","Admin\loginoutController@loginout");
Route::any("/index","Index\indexController@index");
Route::any("/index/info","Index\indexController@info");
Route::any("/index/add","Index\addController@add");