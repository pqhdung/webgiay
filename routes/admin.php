<?php 

Route::get('/','DashboardController@getIndex');

Route::get('add-shoes','DashboardController@AddShoes');
Route::post('add-shoes','DashboardController@postAddShoes');