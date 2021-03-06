<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes(['register'=>true, 'reset'=>true]);

Route::get('/home', [
    App\Http\Controllers\UsersController::class, 'index'
])->name('home');

Route::resource(
    'users', App\Http\Controllers\UsersController::class
)->middleware('auth');
