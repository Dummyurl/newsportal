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

Route::get('/', function () {
    return view('auth.login');

});

Route::get('/login','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('/form','FormController@index');
Route::post('/get_data','FormController@get_data');
Route::get('/apis','APIs\ApiPanelController@index');
Route::get('/apis/test','APIs\ApiViewController@test');

Route::get('/merchant','MerchantController@registrction');
Route::post('/merchant/store','MerchantController@store');
Route::get('/fileupload/view','MerchantController@fileupload');
Route::post('/fileupload/store','MerchantController@fileupload_store');

//categories

Route::group(['namespace'=>'Admin'], function(){
    Route::get('/add-language','AdminController@addLanguageForm');
    Route::post('/post-language','AdminController@postLanguage');
    Route::get('/edit-language/{lang_id}','AdminController@editLanguageForm');
    Route::get('/delete-language/{lang_id}','AdminController@deleteLanguage');
    Route::post('/update-language','AdminController@updateLanguage');
    Route::get('/add-news','AdminController@addNewsForm');
    Route::get('/show-news','AdminController@showNews');
    Route::get('/edit-news/{news_id}','AdminController@editNews');
    Route::get('/delete-news/{id}','AdminController@deleteNews');
    Route::get('/delete-news-image/{id}','AdminController@deleteNewsImage');
    Route::get('/category-by-lang/{id}','AdminController@categoryByLang');
    Route::post('/post-news','AdminController@postNews');
    Route::post('/update-news','AdminController@updateNews');
    Route::get('/send-notification-all-user','AdminController@sendNotificationAllUser');
    Route::get('/send-notification-registered-user','AdminController@sendNotificationRegisteredUser');
    Route::post('/notify-all-users','AdminController@notifAllUsers');
    Route::post('/notify-selected-users','AdminController@notifySelectedUsers');
});

Route::group(['prefix'=> 'Categories', 'namespace'=>'Admin'], function(){
Route::get('/add','CategoriesController@add');
Route::post('store','CategoriesController@store');
Route::get('show','CategoriesController@show');
Route::get('edit/{id}','CategoriesController@edit');
Route::get('delete/{id}','CategoriesController@delete');
Route::post('editstore','CategoriesController@editstore');
});

//sub Categories Route

Route::group(['prefix'=>'SubCategories', 'namespace'=>'Admin'],function(){
Route::get('/add','SubCategoriesController@add');
Route::post('/store','SubCategoriesController@store');
Route::get('/','SubCategoriesController@index');
Route::get('/edit/{id}','SubCategoriesController@edit');
Route::get('/delete/{id}','SubCategoriesController@delete');

});


//Deals

Route::group(['prefix'=>'Deals', 'namespace'=>'Admin'], function (){

    Route::get('/','DealController@index');
    Route::get('/create','DealController@create');
    Route::post('/store','DealController@store');
    Route::get('/edit/{id}','DealController@edit');
    Route::post('/update','DealController@update');
    Route::get('/destroy/{id}','DealController@destroy');
    Route::get('/getSubcatData/{id}','DealController@getSubcatData');





});




//Route::get('/apis',function(){
//    return "hello";
//});
//
//Route::group(['prefix' => 'panel','namespace' => 'APIs'], function () {
//    Route::get('/','AdminController@categoryAtrributeIndex');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
