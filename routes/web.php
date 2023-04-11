<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('home');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::get('/dashboard', 'Dashboard\AdminDashboardController@index')->name('admin.dashboard');
    Route::resource('posts', 'Posts\AdminPostsController');
    Route::resource('posts-categories','Posts\AdminPostsCategoriesController');
    Route::resource('tags',"Tags\AdminTagsController");
    Route::get('tags-suggest',"Tags\AdminTagsController@showTagsSuggestions");
});    