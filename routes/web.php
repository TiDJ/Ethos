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
    return view('pages.home');
});

Auth::routes();

// Articles
Route::prefix('backoffice')->middleware('auth', 'checkAdmin')->group(function () { // 
    Route::resource('posts', 'PostController');
    Route::resource('comments', 'CommentController')->except([
        'create', 'store', 'update'
    ]);
});

Route::post('comments/store', 'HomeController@store')->middleware('auth')->name('comments.store');



Route::get('/actualite/{slug}', 'HomeController@article')->name('posts.article');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/objectif', 'HomeController@objectif')->name('objectif');
Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('auth');
Route::get('/profil', 'HomeController@profil')->name('profil');
Route::get('/politique', 'HomeController@politique')->name('politique');
Route::get('/mention', 'HomeController@mention')->name('mention');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/actu', 'HomeController@actu')->name('actu')->middleware('auth');
