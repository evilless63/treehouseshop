<?php

    Route::get('/', 'UserPublicController@index')
                ->name('blog.user.index');

    Route::get('/catalog/{id?}', 'UserPublicController@catalog')
                ->name('blog.user.catalog');

    Route::get('/login', 'UserPublicController@login')
                ->name('blog.user.login');
    
    Route::get('/product/{id}', 'UserPublicController@product')
                ->name('blog.user.product');
    
    Route::get('/cart', 'UserPublicController@cart')
                ->name('blog.user.cart');
    
    Route::get('/blog', 'UserPublicController@blogCards')
                ->name('blog.user.blog_cards');

    Route::get('/blog-page', 'UserPublicController@blogPage')
                ->name('blog.user.blog_page');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');



    /** Admin side */
    Route::group(['middleware' => ['status','auth']], function () {

        Route::get('/user/cabinet', 'UserPrivateController@profile')
                ->name('blog.user.profile');
        
        Route::get('/user/edit', 'UserPrivateController@editProfile')
                ->name('blog.user.edit_profile');

        Route::get('/user/orders', 'UserPrivateController@orders')
                ->name('blog.user.orders');

        Route::get('/user/subscribe', 'UserPrivateController@subscribe')
                ->name('blog.user.subscribe');

        Route::get('/user/wishlist', 'UserPrivateController@wishlist')
                ->name('blog.user.wishlist');

        $groupeData = [
            'namespace' => 'Blog\Admin',
            'prefix' => 'admin',
        ];
        Route::group($groupeData, function () {
            Route::resource('index', 'MainController')
                ->names('blog.admin.index');

            Route::resource('orders', 'OrderController')
                ->names('blog.admin.orders');

            Route::get('/orders/change/{id}','OrderController@change')
                ->name('blog.admin.orders.change');
            Route::post('/orders/save/{id}','OrderController@save')
                ->name('blog.admin.orders.save');
            Route::get('/orders/forcedestroy/{id}','OrderController@forcedestroy')
                ->name('blog.admin.orders.forcedestroy');


            Route::get('/categories/mydel','CategoryController@mydel')
            ->name('blog.admin.categories.mydel');

            $methods = ['index','edit','update','create','store', 'destroy','mydel'];
            Route::resource('categories', 'CategoryController')
                ->names('blog.admin.categories');

            Route::resource('users','UserController')
                ->names('blog.admin.users');


            Route::get('/products/related','ProductController@related');

            Route::match(['get', 'post'], '/products/ajax-image-upload', 'ProductController@ajaxImage');
            Route::delete('/products/ajax-remove-image/{filename}', 'ProductController@deleteImage');

            Route::post('/products/gallery','ProductController@gallery')
            ->name('blog.admin.products.gallery');

            Route::post('/products/delete-gallery','ProductController@deleteGallery')
            ->name('blog.admin.products.deletegallery');

            Route::get('/products/return-status/{id}','ProductController@returnStatus')
            ->name('blog.admin.products.returnstatus');
            Route::get('/products/delete-status/{id}','ProductController@deleteStatus')
                ->name('blog.admin.products.deletestatus');
            Route::get('/products/delete-product/{id}', 'ProductController@deleteProduct')
            ->name('blog.admin.products.deleteproduct');

            Route::get('/cache/index', 'CacheController@index')
                ->name('blog.admin.cache');
            Route::get('/cache/delete/{key}', 'CacheController@delete')
                ->name('blog.admin.delete');

            Route::get('/filter/group-filter', 'FilterController@attributeGroup');
            Route::get('/filter/group-add', 'FilterController@attributeGroup');
            Route::get('/filter/group-delete/{id}', 'FilterController@groupDelete');
            Route::match(['get','post'],'/filter/group-add-group', 'FilterController@groupAdd');
            Route::match(['get','post'],'/filter/group-edit/{id}','FilterController@groupEdit');
            Route::get('/filter/attributes-filter', 'FilterController@attributeFilter');
            Route::match(['get','post'],'/filter/attrs-add', 'FilterController@attributeAdd');
            Route::get('/filter/attr-delete/{id}', 'FilterController@attrDelete');
            Route::match(['get','post'],'/filter/attr-edit/{id}','FilterController@attrEdit');

            Route::get('/currency/index','CurrencyController@index');
            Route::match(['get','post'],'/currency/add','CurrencyController@add');
            Route::match(['get','post'],'/currency/edit/{id}','CurrencyController@edit');
            Route::get('/currency/delete/{id}','CurrencyController@delete');

            Route::get('/search/result', 'SearchController@index');
            Route::get('/autocomplete', 'SearchController@search');




            Route::resource('products','ProductController')
                ->names('blog.admin.products');


            Route::resource('banners','BannerController')
                ->names('blog.admin.banners');
            Route::match(['get', 'post'], '/banners/ajax-image-upload', 'BannerController@ajaxImage');
            Route::delete('/banners/ajax-remove-image/{filename}', 'BannerController@deleteImage');

            Route::get('/banners/return-status/{id}','BannerController@returnStatus')
            ->name('blog.admin.banners.returnstatus');
            Route::get('/banners/delete-status/{id}','BannerController@deleteStatus')
                ->name('blog.admin.banners.deletestatus');
            Route::get('/banners/delete-banner/{id}', 'BannerController@deleteBanner')
            ->name('blog.admin.banners.deletebanner');


            Route::resource('posts', 'PostController')
                ->names('blog.admin.posts');


        });
    });
    //---------


//    //User side
//    $groupeData = [
//        'namespace' => 'Blog\User',
//        'prefix' => 'user',
//    ];
//    Route::group($groupeData, function () {
//        Route::resource('index', 'MainController')
//            ->names('blog.user.index');
//    });
//    //---------
//
//
//    //Disabled side - in that moment don`t work yet
//    $groupeData = [
//        'namespace' => 'Blog\Disabled',
//        'prefix' => 'disabled',
//    ];
//    Route::group($groupeData, function () {
//        Route::resource('index', 'MainController')
//            ->names('blog.disabled.index');
//    });
    //---------













