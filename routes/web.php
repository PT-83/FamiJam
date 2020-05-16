<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

Route::get('/home', 'HomeController@index');
});

Route::get('/about', function () {
    return view('about');
}); 

Route::get('/email', function () {
    return new WelcomeMail();
});

Auth::routes();

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts/create', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::patch('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@destroy');

Route::post('/register', 'Auth\RegisterController@create')->name('register');

Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');
