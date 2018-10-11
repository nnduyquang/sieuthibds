<?php

Route::group(['middleware' => 'locale'], function() {
    Route::get('/setlocale/{language}', 'FrontendController@changeLanguage')->name('user.change-language');
//    Route::get('/', function(){
//        return view('frontend.home.index');
//    });
    Route::get('/', 'FrontendController@getFrontend');
    Route::get('/san-pham/{path}', 'FrontendController@getSanPhamDetail');
    Route::get('/du-an/{path}','FrontendController@getDuAnDetail');
    Route::get('/du-an.html', 'FrontendController@getAllDuAn');
    Route::get('/danh-sach-san-pham/{path}','FrontendController@getDanhSachSanPhamTheoDuAn');
    Route::get('/danh-sach-san-pham.html','FrontendController@getDanhSachAllSanPham');
});
//Route::get('/setlocale/{language}', 'FrontendController@changeLanguage')->name('user.change-language');





Route::get('/tuyen-dung.html', function () {
    return view('frontend.carrers.index');
});


Route::get('/tuyen-dung-chi-tiet.html', function () {
    return view('frontend.career-details.index');
});

Route::get('/projects.html', function () {
    return view('frontend.list-project.index');
});

Route::get('/blogs.html', function () {
    return view('frontend.blog.index');
});

Route::get('/blogs-details.html', function () {
    return view('frontend.blog-details.index');
});

//Route::get('/projects-info.html', function () {
//    return view('frontend.project.index');
//});

//Route::get('/project-details.html', function () {
//    return view('frontend.pr-details.index');
//});


//Route::get('/danh-sach-can-ho.html', function () {
//    return view('frontend.rent.index');
//});


Route::post('/tim-kiem','FrontendController@getSearch')->name('search');



Route::get('/admin/sml_login', 'AuthController@checklogin');
Route::post('sml_login', 'AuthController@login')->name('login');
Route::get('/admin/sml_logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('sml_admin/dashboard', function () {
        return view('backend.admin.dashboard.index');
    })->name('dashboard');
    Route::resource('sml_admin/users', 'UserController');
    //ROLE
    Route::get('sml_admin/roles', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::post('sml_admin/roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
    Route::patch('sml_admin/roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
    Route::delete('sml_admin/roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    Route::get('sml_admin/roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);

    //PAGE
    Route::get('sml_admin/page', ['as' => 'page.index', 'uses' => 'PageController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/page/create', ['as' => 'page.store', 'uses' => 'PageController@store', 'middleware' => ['permission:page-create']]);
    Route::post('sml_admin/page', ['as' => 'page.search', 'uses' => 'PageController@search']);
    Route::get('sml_admin/page/create', ['as' => 'page.create', 'uses' => 'PageController@create', 'middleware' => ['permission:page-create']]);
    Route::get('sml_admin/page/{id}/edit', ['as' => 'page.edit', 'uses' => 'PageController@edit', 'middleware' => ['permission:page-edit']]);
    Route::patch('sml_admin/page/{id}', ['as' => 'page.update', 'uses' => 'PageController@update', 'middleware' => ['permission:page-edit']]);
    Route::delete('sml_admin/page/{id}', ['as' => 'page.destroy', 'uses' => 'PageController@destroy', 'middleware' => ['permission:page-delete']]);

    //CATEGORY POST
    Route::get('sml_admin/danh-muc-bai-viet', ['as' => 'categorypost.index', 'uses' => 'CategoryItemController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']])->defaults('type','categorypost');
    Route::post('sml_admin/danh-muc-bai-viet/search', ['as' => 'categorypost.search', 'uses' => 'CategoryItemController@search'])->defaults('type','categorypost');
    Route::post('sml_admin/danh-muc-bai-viet/create', ['as' => 'categorypost.store', 'uses' => 'CategoryItemController@store', 'middleware' => ['permission:page-create']])->defaults('type','categorypost');
    Route::post('sml_admin/danh-muc-bai-viet/create-more-unit-lang', ['as' => 'categorypost.storeLocale', 'uses' => 'CategoryItemController@storeLocale', 'middleware' => ['permission:post-create']])->defaults('type','categorypost');
    Route::get('sml_admin/danh-muc-bai-viet/create', ['as' => 'categorypost.create', 'uses' => 'CategoryItemController@create', 'middleware' => ['permission:page-create']])->defaults('type','categorypost');
    Route::get('sml_admin/danh-muc-bai-viet/{translation_id}/{locale_id}/create', ['as' => 'categorypost.createLocale', 'uses' => 'CategoryItemController@createLocale', 'middleware' => ['permission:post-create']])->defaults('type','categorypost');
    Route::get('sml_admin/danh-muc-bai-viet/{id}/edit', ['as' => 'categorypost.edit', 'uses' => 'CategoryItemController@edit', 'middleware' => ['permission:page-edit']])->defaults('type','categorypost');
    Route::patch('sml_admin/danh-muc-bai-viet/{id}', ['as' => 'categorypost.update', 'uses' => 'CategoryItemController@update', 'middleware' => ['permission:page-edit']])->defaults('type','categorypost');
    Route::delete('sml_admin/danh-muc-bai-viet/{id}', ['as' => 'categorypost.destroy', 'uses' => 'CategoryItemController@destroy', 'middleware' => ['permission:page-delete']])->defaults('type','categorypost');

    //POST
    Route::get('sml_admin/post', ['as' => 'post.index', 'uses' => 'PostController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/post/create', ['as' => 'post.store', 'uses' => 'PostController@store', 'middleware' => ['permission:post-create']]);
    Route::post('sml_admin/post/create-more-post-lang', ['as' => 'post.storeLocale', 'uses' => 'PostController@storeLocale', 'middleware' => ['permission:post-create']]);
    Route::post('sml_admin/post', ['as' => 'post.search', 'uses' => 'PostController@search']);
    Route::get('sml_admin/post/{locale_id}/create', ['as' => 'post.create', 'uses' => 'PostController@create', 'middleware' => ['permission:post-create']]);
    Route::get('sml_admin/post/{translation_id}/{locale_id}/create', ['as' => 'post.createLocale', 'uses' => 'PostController@createLocale', 'middleware' => ['permission:post-create']]);
    Route::get('sml_admin/post/{id}/{locale_id}/edit', ['as' => 'post.edit', 'uses' => 'PostController@edit', 'middleware' => ['permission:post-edit']]);
    Route::patch('sml_admin/post/{id}', ['as' => 'post.update', 'uses' => 'PostController@update', 'middleware' => ['permission:post-edit']]);
    Route::delete('sml_admin/post/{id}', ['as' => 'post.destroy', 'uses' => 'PostController@destroy', 'middleware' => ['permission:post-delete']]);

    //LOCATION
    Route::get('sml_admin/dia-diem', ['as' => 'location.index', 'uses' => 'LocationController@index', 'middleware' => ['permission:post-list|post-create|post-edit|post-delete']])->defaults('type','categorypost');
    Route::post('sml_admin/dia-diem/search', ['as' => 'location.search', 'uses' => 'LocationController@search']);
    Route::post('sml_admin/dia-diem/paste', ['as' => 'location.paste', 'uses' => 'LocationController@paste']);
    Route::get('sml_admin/dia-diem/{locale_id}/create', ['as' => 'location.create', 'uses' => 'LocationController@create', 'middleware' => ['permission:post-create']]);
    Route::get('sml_admin/dia-diem/{translation_id}/{locale_id}/create', ['as' => 'location.createLocale', 'uses' => 'LocationController@createLocale', 'middleware' => ['permission:post-create']]);
    Route::post('sml_admin/dia-diem/create', ['as' => 'location.store', 'uses' => 'LocationController@store', 'middleware' => ['permission:post-create']]);
    Route::post('sml_admin/dia-diem/create-more-post-lang', ['as' => 'location.storeLocale', 'uses' => 'LocationController@storeLocale', 'middleware' => ['permission:post-create']]);
    Route::get('sml_admin/dia-diem/{id}/{locale_id}/edit', ['as' => 'location.edit', 'uses' => 'LocationController@edit', 'middleware' => ['permission:post-edit']]);
    Route::patch('sml_admin/dia-diem/{id}', ['as' => 'location.update', 'uses' => 'LocationController@update', 'middleware' => ['permission:post-edit']]);
    Route::delete('sml_admin/dia-diem/{id}', ['as' => 'location.destroy', 'uses' => 'LocationController@destroy', 'middleware' => ['permission:post-delete']]);

    //FACILITY
    Route::get('sml_admin/facility', ['as' => 'facility.index', 'uses' => 'FacilityController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/facility/create', ['as' => 'facility.store', 'uses' => 'FacilityController@store', 'middleware' => ['permission:post-create']]);
    Route::post('sml_admin/facility/create-more-facility-lang', ['as' => 'facility.storeLocale', 'uses' => 'FacilityController@storeLocale', 'middleware' => ['permission:post-create']]);
    Route::post('sml_admin/facility', ['as' => 'facility.search', 'uses' => 'FacilityController@search']);
    Route::get('sml_admin/facility/create', ['as' => 'facility.create', 'uses' => 'FacilityController@create', 'middleware' => ['permission:post-create']]);
    Route::get('sml_admin/facility/{translation_id}/{locale_id}/create', ['as' => 'facility.createLocale', 'uses' => 'FacilityController@createLocale', 'middleware' => ['permission:post-create']]);
    Route::get('sml_admin/facility/{id}/edit', ['as' => 'facility.edit', 'uses' => 'FacilityController@edit', 'middleware' => ['permission:post-edit']]);
    Route::patch('sml_admin/facility/{id}', ['as' => 'facility.update', 'uses' => 'FacilityController@update', 'middleware' => ['permission:post-edit']]);
    Route::delete('sml_admin/facility/{id}', ['as' => 'facility.destroy', 'uses' => 'FacilityController@destroy', 'middleware' => ['permission:post-delete']]);

    //UNIT
    Route::get('sml_admin/unit', ['as' => 'unit.index', 'uses' => 'UnitController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/unit/create', ['as' => 'unit.store', 'uses' => 'UnitController@store', 'middleware' => ['permission:post-create']]);
    Route::post('sml_admin/unit/create-more-unit-lang', ['as' => 'unit.storeLocale', 'uses' => 'UnitController@storeLocale', 'middleware' => ['permission:post-create']]);
    Route::post('sml_admin/unit', ['as' => 'unit.search', 'uses' => 'UnitController@search']);
    Route::get('sml_admin/unit/create', ['as' => 'unit.create', 'uses' => 'UnitController@create', 'middleware' => ['permission:post-create']]);
    Route::get('sml_admin/unit/{translation_id}/{locale_id}/create', ['as' => 'unit.createLocale', 'uses' => 'UnitController@createLocale', 'middleware' => ['permission:post-create']]);
    Route::get('sml_admin/unit/{id}/edit', ['as' => 'unit.edit', 'uses' => 'UnitController@edit', 'middleware' => ['permission:post-edit']]);
    Route::patch('sml_admin/unit/{id}', ['as' => 'unit.update', 'uses' => 'UnitController@update', 'middleware' => ['permission:post-edit']]);
    Route::delete('sml_admin/unit/{id}', ['as' => 'unit.destroy', 'uses' => 'UnitController@destroy', 'middleware' => ['permission:post-delete']]);


    //CATEGORY PRODUCT
    Route::get('sml_admin/danh-muc-san-pham', ['as' => 'categoryproduct.index', 'uses' => 'CategoryItemController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']])->defaults('type','categoryproduct');
    Route::post('sml_admin/danh-muc-san-pham/search', ['as' => 'categoryproduct.search', 'uses' => 'CategoryItemController@search'])->defaults('type','categoryproduct');
    Route::post('sml_admin/danh-muc-san-pham/paste', ['as' => 'categoryproduct.paste', 'uses' => 'CategoryItemController@paste'])->defaults('type','categoryproduct');
    Route::post('sml_admin/danh-muc-san-pham/create', ['as' => 'categoryproduct.store', 'uses' => 'CategoryItemController@store', 'middleware' => ['permission:page-create']])->defaults('type','categoryproduct');
    Route::post('sml_admin/danh-muc-san-pham/create-more-unit-lang', ['as' => 'categoryproduct.storeLocale', 'uses' => 'CategoryItemController@storeLocale', 'middleware' => ['permission:post-create']])->defaults('type','categoryproduct');
    Route::get('sml_admin/danh-muc-san-pham/create', ['as' => 'categoryproduct.create', 'uses' => 'CategoryItemController@create', 'middleware' => ['permission:page-create']])->defaults('type','categoryproduct');
    Route::get('sml_admin/danh-muc-san-pham/{translation_id}/{locale_id}/create', ['as' => 'categoryproduct.createLocale', 'uses' => 'CategoryItemController@createLocale', 'middleware' => ['permission:post-create']])->defaults('type','categoryproduct');
    Route::get('sml_admin/danh-muc-san-pham/{id}/edit', ['as' => 'categoryproduct.edit', 'uses' => 'CategoryItemController@edit', 'middleware' => ['permission:page-edit']])->defaults('type','categoryproduct');
    Route::patch('sml_admin/danh-muc-san-pham/{id}', ['as' => 'categoryproduct.update', 'uses' => 'CategoryItemController@update', 'middleware' => ['permission:page-edit']])->defaults('type','categoryproduct');
    Route::delete('sml_admin/danh-muc-san-pham/{id}', ['as' => 'categoryproduct.destroy', 'uses' => 'CategoryItemController@destroy', 'middleware' => ['permission:page-delete']])->defaults('type','categoryproduct');

    //PRODUCT
    Route::get('sml_admin/san-pham', ['as' => 'product.index', 'uses' => 'ProductController@index', 'middleware' => ['permission:product-list|product-create|product-edit|product-delete']]);
    Route::post('sml_admin/san-pham/create', ['as' => 'product.store', 'uses' => 'ProductController@store', 'middleware' => ['permission:product-create']]);
    Route::post('sml_admin/san-pham/create-more-unit-lang', ['as' => 'product.storeLocale', 'uses' => 'ProductController@storeLocale', 'middleware' => ['permission:post-create']]);
    Route::post('sml_admin/san-pham/search', ['as' => 'product.search', 'uses' => 'ProductController@search']);
    Route::post('sml_admin/san-pham/past', ['as' => 'product.paste', 'uses' => 'ProductController@paste']);
    Route::get('sml_admin/san-pham/{locale_id}/create', ['as' => 'product.create', 'uses' => 'ProductController@create', 'middleware' => ['permission:product-create']]);
    Route::get('sml_admin/san-pham/{translation_id}/{locale_id}/create', ['as' => 'product.createLocale', 'uses' => 'ProductController@createLocale', 'middleware' => ['permission:post-create']]);
    Route::get('sml_admin/san-pham/{id}/{locale_id}/edit', ['as' => 'product.edit', 'uses' => 'ProductController@edit', 'middleware' => ['permission:product-edit']]);
    Route::patch('sml_admin/san-pham/{id}', ['as' => 'product.update', 'uses' => 'ProductController@update', 'middleware' => ['permission:product-edit']]);
    Route::delete('sml_admin/san-pham/{id}', ['as' => 'product.destroy', 'uses' => 'ProductController@destroy', 'middleware' => ['permission:product-delete']]);
    Route::post('sml_admin/san-pham/getAllDistrictsByCity', 'ProductController@getAllDistrictsByCity');
    Route::post('sml_admin/san-pham/getAllWardsByDistrict', 'ProductController@getAllWardsByDistrict');


    //LOCALE
    Route::get('sml_admin/ngon-ngu', ['as' => 'locale.index', 'uses' => 'LocaleController@index']);
    Route::post('sml_admin/ngon-ngu/create', ['as' => 'locale.store', 'uses' => 'LocaleController@store']);
    Route::get('sml_admin/ngon-ngu/create', ['as' => 'locale.create', 'uses' => 'LocaleController@create']);
    Route::get('sml_admin/ngon-ngu/{id}/edit', ['as' => 'locale.edit', 'uses' => 'LocaleController@edit']);
    Route::patch('sml_admin/ngon-ngu/{id}', ['as' => 'locale.update', 'uses' => 'LocaleController@update']);
    Route::delete('sml_admin/ngon-ngu/{id}', ['as' => 'locale.destroy', 'uses' => 'LocaleController@destroy']);

    //CONFIG
    //------GENERAL
    Route::get('sml_admin/config/general', ['as' => 'config.general.index', 'uses' => 'ConfigGeneralController@getConfig']);
    Route::post('sml_admin/config/general', ['as' => 'config.general.store', 'uses' => 'ConfigGeneralController@saveConfig']);
    //-------EMAIL

    Route::get('sml_admin/config/email', ['as' => 'config.email.index', 'uses' => 'ConfigEmailController@getEmailConfig']);
    Route::post('sml_admin/config/email', ['as' => 'config.email.store', 'uses' => 'ConfigEmailController@saveEmailConfig']);

    //MENU
    Route::get('sml_admin/menu', ['as' => 'menu.index', 'uses' => 'MenuController@index']);
    Route::post('sml_admin/menu/create', ['as' => 'menu.store', 'uses' => 'MenuController@store']);
    Route::post('sml_admin/menu/order-menu', ['as' => 'menu.order', 'uses' => 'MenuController@orderMenu']);
    Route::put('sml_admin/menu/edit', ['as' => 'menu.update', 'uses' => 'MenuController@update']);
    Route::delete('sml_admin/menu/{id}', ['as' => 'menu.delete', 'uses' => 'MenuController@delete']);
//    Route::group([
//        'as'     => 'menu.',
//        'prefix' => 'sml_admin/menu/{menu}',
//    ], function ()  {
//        Route::get('builder', ['uses' =>'MenuController@builder',    'as' => 'builder']);
//        Route::post('order', ['uses' =>'MenuController@order_item', 'as' => 'order']);
//
//        Route::group([
//            'as'     => 'item.',
//            'prefix' => 'item',
//        ], function () {
//            Route::delete('{id}', ['uses' => 'MenuController@delete_menu', 'as' => 'destroy']);
//            Route::post('/', ['uses' => 'MenuController@add_item',    'as' => 'add']);
//            Route::put('/', ['uses' =>'MenuController@update_item', 'as' => 'update']);
//        });
//    });

});
