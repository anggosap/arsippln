<?php
Route::get('/', 'SearchController@index');
Route::post('/', 'SearchController@search');
Route::get('/arsip', 'SearchController@arsip');

Route::get('/admin', 'AdminCreateController@index');
Route::post('/createbuku', 'AdminCreateController@createbuku');
Route::post('/createkategori', 'AdminCreateController@createkategori');
Route::get('/modify', 'AdminModifyController@index');
Route::get('/show/{kode}', 'AdminModifyController@show');
Route::post('/update', 'AdminModifyController@update');
Route::get('/delete/{kode}', 'AdminModifyController@delete');
Route::get('/deletekategori/{id}', 'AdminModifyController@deletekategori');