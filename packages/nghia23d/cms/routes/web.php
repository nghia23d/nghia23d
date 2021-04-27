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
        // File Manager
        Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });

        Route::get('/blog.html', 'BlogController@index');

        Route::get('/{slug_title}.html', 'BlogController@show')
            ->where('slug_title', '[0-9a-zA-Z_-]+')
            ->where('id', '[0-9]+');
    }
);
