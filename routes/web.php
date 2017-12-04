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

// Route to the Admin Dashboard
Route::get('/admin', 'AdminController@index')->name('admin');

// Route for the admin to create new post
Route::get('/admin/create', 'AdminController@create');

// This will post the create form to the database
Route::post('/admin/post', 'AdminController@store');
