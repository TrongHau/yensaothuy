<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('article_for_lease', 'ArticleForLeaseController');
    CRUD::resource('article_for_buy', 'ArticleForBuyController');
    CRUD::resource('product', 'ProductController');
    CRUD::resource('category_product', 'CategoryProductController');
    CRUD::resource('contact', 'ContactController');

    Route::get('sync_article_new/sync_article', 'SyncArticleController@getSyncArticle');
    Route::get('sync_article_new/approval/{id}', 'SyncArticleController@approvalSyncArticle');
    Route::post('sync_article_new/sync_post_article', 'SyncArticleController@storeSyncArticle');

    CRUD::resource('slider_home_show1', 'HomeSliderShow1Controller');
    CRUD::resource('slider_home_show2', 'HomeSliderShow2Controller');
    CRUD::resource('slider_home_show3', 'HomeSliderShow3Controller');


}); // this should be the absolute last line of this file
