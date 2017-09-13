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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'FrontendController@index');

Auth::routes();

//Nota el home siempre deber llevar ->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/title', 'TitleController');
Route::resource('/carousel', 'CarouselController');
Route::resource('/thumbnail', 'ThumbnailController');
Route::resource('/lista', 'ListaController');
Route::resource('/acordion', 'AcordionController');
Route::resource('/articulo', 'ArticuloController');