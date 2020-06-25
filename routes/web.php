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

Route::get('/test','testController@index');


Auth::routes();

Route::get('/', 'HomeController@show')->name('home');

Route::get('/posto-shpalljen', 'ShpalljetController@index')->name('post_shpalljet');

Route::post('/pronat-store', 'ShpalljetController@store')->name('pronat-store');
Route::post('/search', 'SearchController@index')->name('search_home');
Route::get('shpalljet/{id}', 'ShpalljetController@show' )->name('Shpalljet_show');


Route::group(['middleware' => ['auth',]], function () {
    Route::get('shpalljet-e-mija', 'ShpalljetController@shpalljet' )->name('Shpalljet_show');
});

Route::group(['middleware' => ['is_admin',]], function () {
    Route::get('/administrimi', 'AdminstrimiController@index')->name('Administrimi');
    Route::get('/addUser', 'AdminstrimiController@adduser')->name('AddUser');

    Route::post('/user/search', 'AdminstrimiController@search')->name('Administrimi');
    Route::post('/addUser_store', 'AdminstrimiController@addUser_store')->name('addUser_store');
    Route::get('/edit/{id}', 'AdminstrimiController@edit')->name('edit_user');
    Route::post('/user/update/{id}', 'AdminstrimiController@update')->name('update_user');
    Route::delete('/user/delete/{id}', 'AdminstrimiController@destroy')->name('destroy_user');
    Route::get('/aprovo-shpalljet', 'AprovoController@index')->name('aprovo_shpalljet');
    Route::post('/aprovim-update/{id}', 'AprovoController@update')->name('aprovimi_update');
    Route::delete('/aprovim/delete/{id}', 'AprovoController@destroy')->name('aprovimi_update');
});





Route::get('dropzone/image','testController@index');
Route::post('dropzone/store','testController@store')->name('store_dropzone');
