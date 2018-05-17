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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', 'ContactController@contact');
Route::post('/contact', 'ContactController@contact');

Route::get('/project', function () {
    return view('project');
});
Route::get('/all_projects', function () {
    return view('all_projects');
});
Route::get('/make', function () {
    return view('make');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/term', function () {
    return view('term');
});
Route::get('/commerce', function () {
    return view('commerce');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/users/edit', 'UserController@edit');
Route::get('/users/made_project', 'UserController@made_project');
Route::get('/users/assist_project', 'UserController@assist_project');
Route::get('/users/favorite', 'UserController@favorite');

Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login');