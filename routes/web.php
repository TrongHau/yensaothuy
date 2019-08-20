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

Route::group(['middlewareGroups' => ['web']], function () {
    Auth::routes();
});
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Auth::routes();
Route::get('/logout', 'UserController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('danh-muc/{slug}.html', ['as' => 'catalog', 'uses' => 'CatalogController@index']);
Route::get('danh-muc/{slug}', ['as' => 'catalog', 'uses' => 'CatalogController@index']);
Route::get('{slug}p-{id}.html', ['as' => 'detail.index', 'uses' => 'DetailController@index']);
Route::get('{slug}p-{id}', ['as' => 'detail.index', 'uses' => 'DetailController@index']);




















