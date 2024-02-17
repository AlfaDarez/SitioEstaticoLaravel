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
// iniciara y regresara a sitio controller en el index
Route::get('/', 'SitioController@index')->name('index');

// iniciara y regresara a sitio controller en el contacto
Route::get('/contacto', 'SitioController@contacto')->name('contacto');

// iniciara y regresara a sitio controller sobre nosotros
Route::get('/nosotros', 'SitioController@nosotros')->name('nosotros');

// iniciara y regresara a sitio controller en productos
Route::get('/productos', 'SitioController@productos')->name('productos');

//iniciara y regresara a sitio controller en Compra
Route::get('/Compra/{productos}', 'SitioController@comprar')->name('compra');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
