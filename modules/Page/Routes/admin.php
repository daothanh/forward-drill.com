<?php

Route::group(['prefix' => 'pages'], function () {

    Route::bind('page', function ($id) {
        return app(\Modules\Page\Repositories\PageRepository::class)->find($id);
    });

    Route::get('/', ['uses' => 'PageController@index', 'as' => 'admin.page.index'])->middleware(['permission:list pages']);
    Route::get('/create', ['uses' => 'PageController@create', 'as' => 'admin.page.create'])->middleware(['permission:create page']);
    Route::get('/edit/{page}', ['uses' => 'PageController@edit', 'as' => 'admin.page.edit'])->where('page', '[0-9]+')->middleware(['permission:edit page']);
    Route::get('/duplicate/{page}', ['uses' => 'PageController@duplicate', 'as' => 'admin.page.duplicate'])->where('page', '[0-9]+')->middleware(['permission:create page']);
    Route::post('/store', ['uses' => 'PageController@store', 'as' => 'admin.page.store'])->middleware(['permission:create page|edit page']);
});
