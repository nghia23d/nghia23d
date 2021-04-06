<?php

Route::group(
    [
        'prefix' => 'cms',
        'namespace' => 'nghia23d\cms\Http\Controllers',
        'as' => 'cms.',
        'middleware' => ['web', 'auth']
    ],
    function () {
        // Module
        Route::resources([
            'blog' => BlogController::class,
        ]);
    }
);


// File Manager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
