<?php

Route::group(
    [
        'prefix' => 'cms',
        'namespace' => 'nghia23d\cms\Http\Controllers',
        'as' => 'cms.'
    ],
    function () {
        Route::resources([
            'blog' => BlogController::class,
        ]);
    }
);
