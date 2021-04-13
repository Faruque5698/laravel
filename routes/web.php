<?php
Route::get('/','FrontController@index');
Route::get('/category','FrontController@category')->name('category');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin-category','CategoryController@index')->name('admin-category');
Route::get('/add-category','CategoryController@addCategory')->name('add-category');
Route::post('/save-category','CategoryController@saveCategory')->name('save-category');
Route::get('/unpublished-category/{id}','CategoryController@unpublishedCategory')->name('unpublished-category');
Route::get('/published-category/{id}','CategoryController@publishedCategory')->name('published-category');
Route::get('/edit-category/{id}','CategoryController@editCategory')->name('edit-category');
Route::get('/delete-category/{id}','CategoryController@deleteCategory')->name('delete-category');
Route::post('/update-category','CategoryController@updateCategory')->name('update-category');


Route::resource('brand','BrandController');
Route::resource('product','ProductController');
