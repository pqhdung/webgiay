<?php 

Route::get('/','DashboardController@getIndex');

Route::group(["prefix"=>"shoes"],function(){
    Route::get('add-shoes','DashboardController@AddShoes');
    Route::post('add-shoes','DashboardController@postAddShoes');
});


