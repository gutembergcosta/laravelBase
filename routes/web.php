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

//Route::get('/item', 'Item@index');
Route::get('/item', 'Item@pagina');
Route::get('/item/editar/{id}', 'Item@pagina')->name('editarItem');
Route::post('/item/salvar', 'Item@salvar');
Route::DELETE('/item/deletar/{id}', 'Item@deletar');



Route::get('/login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('register', 'AuthController@register');
Route::post('post-register', 'AuthController@postRegister'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');
