<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', function(){
    return view('user.index');
});
Route::get('/users/edit', function(){
    return view('user.edit');
});
Route::get('/rooms', function(){
    return view('room.index');
});
Route::get('/rooms/edit', function(){
    return view('room.edit');
});
Route::get('/category', function(){
    return view('category.index');
});
Route::get('/category/edit', function(){
    return view('category.edit');
});
Route::get('/item', function(){
    return view('item.index');
});
Route::get('/item/edit', function(){
    return view('item.edit');
});
