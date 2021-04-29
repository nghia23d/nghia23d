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
        // Module
        Route::resources([
            'blog'         => BlogController::class,
            'question_ask' => QuestionAskController::class,
        ]);
    }
);

// Web
Route::group(
    [
        'namespace' => 'nghia23d\cms\Http\Controllers\User',
    ],
    function () {

        Route::get('/', 'HomeController@pageHome')->name('home');

        Route::get('/blog.html', 'HomeController@pageBlog');

        Route::get('/{slug_title}.html', 'HomeController@getDetailBlog')
            ->where('slug_title', '[0-9a-zA-Z_-]+')
            ->where('id', '[0-9]+');


        // File Manager
        Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });
    }
);
