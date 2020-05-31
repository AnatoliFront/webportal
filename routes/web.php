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
Route::get('/', 'ActivityCategoriesController@index');
Route::get('/posts/{category}', 'ActivityPostsController@show_posts');
Route::get('/posts/post/{id}', 'ActivityPostsController@show_post');
Route::get('/registration', 'MainUsersController@show');
Route::post('/registration_request', 'MainUsersController@create');
Route::get('/knowledge', 'BasePostsController@index');
Route::get('/knowledge/post/{id}', 'BasePostsController@show');
Route::get('/organisations', 'OrganisationsController@index');
Route::post('/search_organisations', 'OrganisationsController@search');
Route::get('/request', 'BasePostsController@create');
Route::get('/help_request', 'BasePostsController@create');
Route::get('/account', 'BasePostsController@create');
Route::get('/activities', 'ActivityPostsController@index');
Route::get('/help_request', 'MainUsersController@show_v');
Route::get('/request', 'ActivityPostsController@add_show');
Route::post('/request/add', 'ActivityPostsController@add_activity');
Route::get('/account/{id}', 'MainUsersController@account');
Route::get('/add_activity', 'ActivityPostsController@add_activity_show');
Route::post('/add_activity/add', 'ActivityPostsController@add_activity');
Route::post('/login', 'MainUsersController@login');
Route::post('/search_activities', 'ActivityPostsController@search');
Route::post('/send_email', 'FeedBackController@send');
