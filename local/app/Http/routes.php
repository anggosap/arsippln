<?php
Route::get('/index', 'SearchController@index');
Route::post('/index', 'SearchController@search');
Route::get('/arsip', 'SearchController@arsip');
Route::get('/admin', 'AdminController@input');
Route::post('/storebuku', 'AdminController@storebuku');
Route::post('/storekategori', 'AdminController@storekategori');
Route::post('/deletebuku', 'AdminController@deletebuku');
Route::post('/deletekategori', 'AdminController@deletekategori');
