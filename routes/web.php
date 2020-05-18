<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PublicController@index');

Route::get('/thanhvien.html', function(){
	return view('thanhvien');

});

/* route Producer */
Route::group(['prefix'=>'producer'], function(){

	Route::get('all.html', 'ProducerController@showAllProducer');
});

Route::get('/producer-nike.html', 'ProducerController@showAllNike');

Route::get('/producer-adidas.html', 'ProducerController@showAllAdidas');

Route::get('/producer-newbalance.html', 'ProducerController@showAllNewBalance');

Route::get('/producer-converse.html', 'ProducerController@showAllConverse');

Route::get('/producer-bitis.html', 'ProducerController@showAllBitis');

/* route Category */

Route::get('/producer-nike-jordan.html', 'CategoryController@showCategoryNikeJordan');

Route::get('/producer-nike-air.html', 'CategoryController@showCategoryNikeAir');

Route::get('/producer-nike-running.html', 'CategoryController@showCategoryNikeRunning');

Route::get('/producer-adidas-ultraboost.html', 'CategoryController@showCategoryAdidasUltraboost');

Route::get('/producer-adidas-nmd.html', 'CategoryController@showCategoryAdidasNMD');

Route::get('/producer-adidas-stansmith.html', 'CategoryController@showCategoryAdidasStanSmith');

Route::get('/producer-nb-running.html', 'CategoryController@showCategoryNewBalanceRunning');

Route::get('/producer-nb-walking.html', 'CategoryController@showCategoryNewBalanceWalking');

Route::get('/producer-cv-classic.html', 'CategoryController@showCategoryConverseClassic');

Route::get('/producer-cv-chuck70s.html', 'CategoryController@showCategoryConverseChuck70s');

Route::get('/producer-cv-allstar.html', 'CategoryController@showCategoryConverseAllStar');

Route::get('/producer-bitis-hunter.html', 'CategoryController@showCategoryBitisHunter');
Route::get('/producer.html', 'ProducerController@showAllProducer');

//show tất cả giày
Route::get('all-shoes','PublicController@getAllShoes');

//thêm sản phẩm vào giỏ hàng
Route::get('add-to-cart/{id}','CartController@getAddToCart')->name('themvaogiohang');


//route show giỏ hàng
Route::get('show-cart','CartController@ShowAllCart')->name('gio-hang');

//route get category theo id_category
Route::get('category/{id}/{name}', 'PublicController@getCategory');

//route get producer theo id_producer
Route::get('producer/{id}/{name}', 'PublicController@getProducer');

//show chi tiết sản phẩm
Route::get('product/{id}/{name}','PublicController@getProductDetail');

//Cập nhật giỏ hàng
Route::get('update-to-cart/{id}/{Qty}','CartController@getUpdatetocart');


Route::get('/login', ['as' => 'getlogin', 'uses' => 'UserController@index']);
Route::post('/register', ['as' => 'postregister', 'uses' => 'UserController@postUserRegister']);
Route::post('/login', ['as' => 'postlogin', 'uses' => 'UserController@userpostLogin']);