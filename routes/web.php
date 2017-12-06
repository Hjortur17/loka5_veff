<?php

Auth::Routes();

// Routes to Homepage
Route::get('/', 'PostsController@index')->name('home');
Route::get('/home', 'PostsController@index');

// This route will return a posts
Route::get('/posts/{post}', 'PostsController@show');

// Route for comments
Route::post('/posts/{post}/comments', 'CommentsController@store');

// Route for tags
Route::get('/posts/tags/{tag}', 'TagsController@index');

// Route to the Profile
Route::get('/profile', 'ProfileController@index')->name('profile');

// Route for every route connected to the AdminController
Route::get('/admin/manage', 'AdminController@manage');

Route::resource('admin', 'AdminController');
