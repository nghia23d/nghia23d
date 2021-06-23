<?php
// Cms
Route::group(
    [
        'prefix' => 'cms',
        'namespace' => 'nghia23d\cms\Http\Controllers\Admin',
        'as' => 'cms.',
        'middleware' => ['web', 'auth']
    ],
    function () {
        // Slider
        Route::resource('slider', 'SliderController');
        Route::get('slider/{id}/change-status', 'SliderController@changeStatus')->where('id', '[0-9]+');

        // Blog
        Route::resource('blog', 'BlogController');
        Route::get('blog/{id}/change-status', 'BlogController@changeStatus')->where('id', '[0-9]+');

        // QuestionAsk
        Route::resource('question_ask', 'QuestionAskController');
        Route::get('question_ask/{id}/change-status', 'QuestionAskController@changeStatus')->where('id', '[0-9]+');

         // Review
         Route::resource('review', 'ReviewController');
         Route::get('review/{id}/change-status', 'ReviewController@changeStatus')->where('id', '[0-9]+');
    }
);

// Web
Route::group(
    [
        'namespace' => 'nghia23d\cms\Http\Controllers\User',
    ],
    function () {
        //View
        Route::view('/lien-he.html', 'contact')->name('contact');

        //Home
        Route::get('/', 'HomeController@pageHome')->name('home');
        Route::get('/blog.html', 'HomeController@pageBlog');
        Route::get('/{slug_title}.html', 'HomeController@getDetailBlog')
            ->where([
                'slug_title', '[0-9a-zA-Z_-]+',
                'id', '[0-9]+'
            ]);
        Route::get('/search', 'HomeController@searchBlog')->name('search');


        // File Manager
        Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });
    }
);
