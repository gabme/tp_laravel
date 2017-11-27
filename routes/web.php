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

Route::get('/faqs', function () {
    return view('faqs');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/productos", "ProductsController@index");

Route::get("/agregarProducto", "ProductsController@add")->middleware("auth");
Route::post("/agregarProducto", "ProductsController@store")->middleware("auth");
