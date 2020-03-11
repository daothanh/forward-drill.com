<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('blog')->group(function() {
    Route::get('/', 'BlogController@index')->name('blog.post');
    Route::get('/category/{slug}', 'BlogController@index')->name('blog.category');
    Route::get('/{slug}', 'BlogController@detail')->name('blog.post.detail');
});
