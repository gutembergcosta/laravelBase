<?php


//GET =============================================
Route::get('item', 'Item@pagina')->name('teste');
Route::get('editar-item/{id}', 'Item@pagina');
Route::get('login', 'AuthController@index');
Route::get('register', 'AuthController@register');
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');


//POST =============================================
Route::post('salvar-item', 'Item@salvar');
Route::post('post-login', 'AuthController@postLogin'); 
Route::post('post-register', 'AuthController@postRegister'); 


//DELETE =============================================
Route::DELETE('/item/deletar/{id}', 'Item@deletar');

