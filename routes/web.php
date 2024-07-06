<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
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

Route::resource('user', UserController::class);
Route::resource('category', CategoryController::class);
Route::resource('room', RoomController::class);

// Route::get('/users', function(){
//     return view('user.index');
// });
// Route::get('/users/edit', function(){
//     return view('user.edit');
// });
// Route::get('/user/detail', function(){
//     return view('user.detail');
// });
Route::get('/rooms', function(){
    return view('room.index');
});
Route::get('/rooms/edit', function(){
    return view('room.edit');
});
Route::get('/room/detail', function(){
    return view('room.detail');
});
// Route::get('/category', function(){
//     return view('category.index');
// });
// Route::get('/category/edit', function(){
//     return view('category.edit');
// });
Route::get('/item', function(){
    return view('item.index');
});
Route::get('/item/edit', function(){
    return view('item.edit');
});
Route::get('/item/detail', function(){
    return view('item.detail');
});
