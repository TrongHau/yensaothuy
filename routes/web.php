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




Route::get('gioi-thieu.html', ['as' => 'Catalog.gioi_thieu', 'uses' => 'CatalogController@gioi_thieu']);
Route::get('chinh-sach-doi-tra.html', ['as' => 'Catalog.chinh_sach_doi_tra', 'uses' => 'CatalogController@chinh_sach_doi_tra']);
Route::get('dieu-khoan-dich-vu.html', ['as' => 'Catalog.dieu_khoan_dich_vu', 'uses' => 'CatalogController@dieu_khoan_dich_vu']);
Route::get('huong-dan-mua-hang.html', ['as' => 'Catalog.huong_dan_mua_hang', 'uses' => 'CatalogController@huong_dan_mua_hang']);




















