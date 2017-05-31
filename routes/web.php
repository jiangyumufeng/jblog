<?php

// User Auth
Auth::routes();

// Article
Route::get('/', 'ArticleController@index');
Route::get('{slug}', 'ArticleController@show');

// Search
Route::get('search', 'HomeController@search');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {
   Route::get('{path?}', 'HomeController@dashboard')->where('path', '[\/\w\.-]*');
});