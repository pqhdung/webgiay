<?php 

// Route::get('/','DashboardController@getIndex');

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
        Route::get('all-shoes','DashboardController@ShowAllShoes');

        Route::get('upload/{id}','ImagesShoesController@index');
        // Route::post('upload','ImagesShoesController@store');

        Route::post('image','ImagesShoesController@upload');
    });
});



// Route::group(["prefix"=>"shoes"],function(){
//     Route::get('add-shoes','DashboardController@AddShoes');
//     Route::post('add-shoes','DashboardController@postAddShoes');
// });


