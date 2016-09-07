<?php



Route::get('/compras', 'ComprasController@index');
Route::put('/compras', 'ComprasController@update');
Route::delete('/compras', 'ComprasController@destroy');
Route::post('/compras', 'ComprasController@store');

Route::post('/productos', 'ProductosController@store');
Route::put('/productos', 'ProductosController@update');
Route::delete('/productos', 'ProductosController@destroy');
Route::get('/productos', 'ProductosController@index');