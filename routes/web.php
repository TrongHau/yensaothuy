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

Route::get('san-pham-khuyen-mai.html', ['as' => 'catalog', 'uses' => 'CatalogController@khuyen_mai']);
Route::get('san-pham-khuyen-mai', ['as' => 'catalog', 'uses' => 'CatalogController@khuyen_mai']);

Route::post('danh-muc/{slug}.html', ['as' => 'catalog', 'uses' => 'CatalogController@ajax']);
Route::post('danh-muc/{slug}', ['as' => 'catalog', 'uses' => 'CatalogController@ajax']);

Route::post('san-pham-khuyen-mai.html', ['as' => 'catalog', 'uses' => 'CatalogController@ajax']);
Route::post('san-pham-khuyen-mai', ['as' => 'catalog', 'uses' => 'CatalogController@ajax']);

Route::get('san-pham/{slug}.html', ['as' => 'detail.index', 'uses' => 'DetailController@index']);
Route::get('san-pham/{slug}', ['as' => 'detail.index', 'uses' => 'DetailController@index']);

Route::post('chi-tiet-san-pham', ['as' => 'detail.index', 'uses' => 'DetailController@detailModal']);

Route::get('tim-kiem', ['as' => 'search.index', 'uses' => 'SearchController@index']);
Route::post('tim-kiem', ['as' => 'search.index', 'uses' => 'SearchController@page']);

Route::get('tin-tuc.html', ['as' => 'article.index', 'uses' => 'ArticleController@index']);
Route::get('tin-tuc', ['as' => 'article.index', 'uses' => 'ArticleController@index']);

Route::post('tin-tuc.html', ['as' => 'article.ajax', 'uses' => 'ArticleController@ajax']);
Route::post('tin-tuc', ['as' => 'article.ajax', 'uses' => 'ArticleController@ajax']);

Route::get('tin-tuc/{slug}.html', ['as' => 'detail.article', 'uses' => 'DetailController@article']);
Route::get('tin-tuc/{slug}', ['as' => 'detail.article', 'uses' => 'DetailController@article']);

Route::get('gioi-thieu.html', ['as' => 'Catalog.gioi_thieu', 'uses' => 'CatalogController@gioi_thieu']);
Route::get('lien-he.html', ['as' => 'Catalog.lien_he', 'uses' => 'CatalogController@lien_he']);
Route::post('lien-he.html', ['as' => 'Catalog.gui_lien_he', 'uses' => 'CatalogController@gui_lien_he']);
Route::get('chinh-sach-doi-tra.html', ['as' => 'Catalog.chinh_sach_doi_tra', 'uses' => 'CatalogController@chinh_sach_doi_tra']);
Route::get('dieu-khoan-dich-vu.html', ['as' => 'Catalog.dieu_khoan_dich_vu', 'uses' => 'CatalogController@dieu_khoan_dich_vu']);
Route::get('huong-dan-mua-hang.html', ['as' => 'Catalog.huong_dan_mua_hang', 'uses' => 'CatalogController@huong_dan_mua_hang']);


Route::get('gioi-thieu', ['as' => 'Catalog.gioi_thieu', 'uses' => 'CatalogController@gioi_thieu']);
Route::get('lien-he', ['as' => 'Catalog.lien_he', 'uses' => 'CatalogController@lien_he']);
Route::post('ien-he', ['as' => 'Catalog.gui_lien_he', 'uses' => 'CatalogController@gui_lien_he']);
Route::get('chinh-sach-doi-tra', ['as' => 'Catalog.chinh_sach_doi_tra', 'uses' => 'CatalogController@chinh_sach_doi_tra']);
Route::get('dieu-khoan-dich-vu', ['as' => 'Catalog.dieu_khoan_dich_vu', 'uses' => 'CatalogController@dieu_khoan_dich_vu']);
Route::get('huong-dan-mua-hang', ['as' => 'Catalog.huong_dan_mua_hang', 'uses' => 'CatalogController@huong_dan_mua_hang']);






