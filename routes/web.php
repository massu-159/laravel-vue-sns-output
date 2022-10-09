<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', 'App\Http\Controllers\ArticleController@index')->name('articles.index');
Route::resource('/articles', 'App\Http\Controllers\ArticleController')->except(['index', 'show'])->middleware('auth');
Route::resource('/articles', 'App\Http\Controllers\ArticleController')->only(['show']);
Route::prefix('articles')->name('articles.')->group(function () {
    Route::put('/{article}/like', 'App\Http\Controllers\ArticleController@like')->name('like')->middleware('auth');
    Route::delete('/{article}/like', 'App\Http\Controllers\ArticleController@unlike')->name('unlike')->middleware('auth');
});
Route::get('/tags/{name}', 'App\Http\Controllers\TagController@show')->name('tags.show');
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/{name}', 'App\Http\Controllers\UserController@show')->name('show');
    Route::get('/{name}/likes', 'App\Http\Controllers\UserController@likes')->name('likes');

    
    
    Route::get('/{name}/followings', 'App\Http\Controllers\UserController@followings')->name('followings');
    Route::get('/{name}/followers', 'App\Http\Controllers\UserController@followers')->name('followers');
    Route::middleware('auth')->group(function () {
        Route::put('/{name}/follow', 'App\Http\Controllers\UserController@follow')->name('follow');
        Route::delete('/{name}/follow', 'App\Http\Controllers\UserController@unfollow')->name('unfollow');
    });
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

