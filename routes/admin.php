<?php 

// Route::get('/','DashboardController@getIndex');

<<<<<<< HEAD
Route::get('login', ['as' => 'getLogin', 'uses' => 'AdminLoginController@getLogin']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'AdminLoginController@postLogin']);
Route::get('logout', ['as' => 'getLogout', 'uses' => 'AdminLoginController@getLogout']);

Route::group(['middleware' => 'checkAdminLogin', 'prefix' => '/'], function() {
    Route::get('/',function() {
        return view('AdminPage.SubAdmin.trangchu');
    });
    Route::group(["prefix"=>"shoes"],function(){
        Route::get('add-shoes','DashboardController@AddShoes');
        Route::post('add-shoes','DashboardController@postAddShoes');
    });
=======
Route::group(["prefix"=>"shoes"],function(){
    Route::get('add-shoes','DashboardController@AddShoes');
    Route::post('add-shoes','DashboardController@postAddShoes');
    Route::get('all-shoes','DashboardController@ShowAllShoes');
>>>>>>> 872cdde7803ef38ff5b4fdd86bc70b3031cafee2
});



<<<<<<< HEAD
// Route::group(["prefix"=>"shoes"],function(){
//     Route::get('add-shoes','DashboardController@AddShoes');
//     Route::post('add-shoes','DashboardController@postAddShoes');
// });

=======
>>>>>>> 872cdde7803ef38ff5b4fdd86bc70b3031cafee2

