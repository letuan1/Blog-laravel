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

Route::get('/', 'BlogController@index')->name('blog');

Route::get('readmore', 'BlogController@readMore')->name('readMore');

Route::get('/view-add-new-blog', 'BlogController@viewinsertBlog')->name('viewinsertBlog');

Route::get('/view-update-blog/{id}', 'BlogController@viewUpdateBlog')->name('viewUpdateBlog');

Route::get('/delete-blog/{id}', 'BlogController@delete')->name('delete');

Route::post('/add-new-blog', 'BlogController@addNewBlog')->name('addNewBlog');

Route::post('/update-blog/{id}', 'BlogController@updateBlog')->name('updateBlog');

