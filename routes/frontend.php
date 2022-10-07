<?php

Route::group(['middleware' => 'frontend'], function() {
    Route::get('/', ['as' => 'home.index', 'uses' => 'Frontend\FrontendController@index']);
    /* Sản phẩm */
    Route::get('/san-pham', ['as' => 'product.index', 'uses' => 'Frontend\ProductController@index']);
    Route::get('/sale', ['as' => 'product.sale', 'uses' => 'Frontend\ProductController@sale']);
    Route::get('/san-pham/{alias}', ['as' => 'product.detail', 'uses' => 'Frontend\ProductController@detail']);
    /* Dự án */
    Route::get('/du-an/{alias}', ['as' => 'project.detail', 'uses' => 'Frontend\ProjectController@detail']);
    /* Tin tuc */
    Route::get('/tin-tuc', ['as' => 'news.index', 'uses' => 'Frontend\NewsController@index']);
    Route::get('/danh-muc-tin/{alias}', ['as' => 'news_category.index', 'uses' => 'Frontend\NewsController@index']);
    Route::get('/tin-tuc/{alias}', ['as' => 'news.detail', 'uses' => 'Frontend\NewsController@detail']);

    /* Liên hệ */
    Route::get('/contact', ['as' => 'contact.index', 'uses' => 'Frontend\FrontendController@contact']);
    
    /* Xem dự án cho nhân viên */
    Route::get('/noi-bo', ['as' => 'product_management.index', 'uses' => 'Frontend\ProductManagementController@index']);
    Route::get('/login-noibo', ['as' => 'product_management.login', 'uses' => 'Frontend\ProductManagementController@login']);
    Route::post('/login-noibo', ['as' => 'product_management.postLogin', 'uses' => 'Frontend\ProductManagementController@postLogin']);

});
