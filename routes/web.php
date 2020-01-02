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
    return view('index');
});
//
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/candidate/register', function (){
    return view('candidate.signup');
})->name('candidate.register');


Route::get('/employer/register', function (){
    return view('employer.signup');
})->name('employer.register');


// Use for the role middlewares
Route::middleware('role')->group(function () {

    Route::get('/login', function (){
        return view('login');
    })->name('login');

});

