<?php

Route::group(['middleware'=>['web']],function(){
    Route::get('/',[
        'uses' => 'PostController@getFrontendIndex',
        'as' => 'index'
    ]);

    Route::get('/index',[
       'uses' => 'PostController@getfrontendIndex',
        'as' => 'index'
    ]);
    Route::get('/About',function(){
        $category = \App\Category::all();
        return view('frontend.other.about',['categories' => $category]);
    })->name('about');

    Route::get('/Contact',[
           'uses' =>'ContactController@getIndex',
            'as' => 'contact_me'
        ]);

    Route::get('/Single',function(){
        $category = \App\Category::all();
        return view('frontend.blog.single',['categories' => $category]);
    })->name('single');

    Route::get('/Scholars',function(){
        $category = \App\Category::all();
        return view('frontend.other.scholars',['categories'=> $category]);
    })->name('scholarsplatform');

    Route::get('/Tutorials',function(){
        $category = \App\Category::all();
       return view('frontend.other.tutorials',['categories'=> $category]);
    })->name('tutorials');

    Route::get('/DigitalMarketing',function(){
        $category = \App\Category::all();
        return view('frontend.blog.digital',['categories'=> $category]);
    })->name('digital');

    // Login for Administartors Side
    Route::post('/admin/login',[
        'uses' => 'AdminController@postLogin',
        'as' => 'admin.login'
    ]);

    Route::get('/admin/login',[
        'uses' => 'AdminController@getLogin',
        'as' => 'admin.login'
    ]);



    /* The Admin Routes */

    Route::group([
        'prefix' => '/admin',
        'middleware' => 'auth'
    ],function() {
        Route::get('/',[
            'uses' => 'AdminController@getDashboard',
            'as' => 'admin.dashboard'
        ]);
        Route::get('/CreateAdmin',[
           'uses' => 'AdminController@getCreateAdmin',
            'as' => 'create_admin'
        ]);



        Route::get('/EditAdmin/{admin_id}/edit',[
            'uses' =>'AdminController@getEditAdmin',
            'as' => 'edit_admin'
        ]);

        Route::get('/DeleteAdmin/{admin}/delete',[
           'uses' => 'AdminController@getDeleteAdmin',
            'as' =>'delete_admin'
        ]);

        Route::get('/CreatePost',[
            'uses' => 'PostController@getCreatePost',
            'as' =>'create_post'
        ]);

        Route::get('/Comment{post_id}/{post_title}/',[
           'uses'=> 'CommentController@getComments',
            'as' =>'comments'
        ]);

        Route::get('/EditPost{post_id}/edit',[
            'uses' => 'PostController@getEditPost',
            'as' => 'edit_post'
        ]);

        Route::get('/DeletePost/{post_id}/delete',[
           'uses' => 'PostController@getDeletePost',
            'as' => 'delete_post'
        ]);

        Route::get('/ViewPost',[
            'uses' => 'PostController@getPostIndex',
            'as' => 'admin.posts'
        ]);

        Route::get('/Categories',[
           'uses' => 'CategoryController@getCategoryIndex',
            'as' => 'categories'
        ]);
        Route::get('/DeleteCategories{category_id}',[
           'uses' => 'CategoryController@getCategoryDelete',
            'as' => 'delete_category'
        ]);

        Route::get('/Scholars', function () {
            return view('admin.other.scholars');
        })->name('scholars');

        Route::get('/News', [
            'uses' => 'NewsController@getNewsIndex',
            'as' => 'news'
        ]);

        Route::get('/Daily Quote',[
            'uses' => 'QuoteController@QuoteAdmin',
            'as' => 'quote'
        ]);

        Route::post('//Daily Quote',[
            'uses' => 'QuoteController@QuotePost',
            'as' => 'quote_save'
        ]);


        Route::get('/Developer of the Week',[
            'uses' => 'DeveloperController@DeveloperAdmin',
            'as' => 'developer'
        ]);

        Route::post('/Developer of the Week',[
            'uses' => 'DeveloperController@DeveloperPost',
            'as' => 'developer_save'
        ]);






        Route::get('/Contact', function () {
            return view('admin.other.contact');
        })->name('contact');

        Route::get('/CreateNews',[
            'uses' => 'NewsController@getCreateNews',
            'as' =>'create_news'
        ]);

        Route::get('/DeleteNew{delete_id}',[
           'uses'=>'NewsController@getDeleteNews',
            'as' => 'delete_news'
        ]);
       Route::post('/CreateAdmin',[
          'uses' => 'AdminController@createAdmin',
           'as' => 'create.admin'
       ]);
        Route::post('/EditAdmin/{admin_id}/edit',[
          'uses' => 'AdminController@postEditAdmin',
            'as' => 'edit_admin'
        ]);
        Route::post('/CreatePost',[
           'uses' => 'PostController@postCreatePost',
            'as' => 'create_post'
        ]);
        Route::post('/EditPost/edit',[
            'uses' => 'PostController@postEditPost',
            'as' => 'post_edit'
        ]);
        Route::post('/Categories',[
           'uses'=> 'CategoryController@postCategory',
            'as' => 'category'
        ]);
        Route::post('/EditCategories',[
           'uses' => 'CategoryController@postEditCategory',
            'as' =>'editCategory'
        ]);
        Route::post('/CreateNews',[
            'uses' => 'NewsController@postCreateNews',
            'as' => 'create_news'
        ]);
        Route::post('EditNews',[
           'uses' => 'NewsController@postEditNews',
            'as' => 'edit_news'
        ]);
        Route::get('/logout',[
            'uses' => 'AdminController@getLogout',
            'as' => 'admin.logout'
        ]);


    });
});



