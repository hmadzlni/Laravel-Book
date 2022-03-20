<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});
 
Route::resource('posts', PostController::class);
Route::get('/index', [PostController::class, 'index'])->name('index');

Route::get('/create', [PostController::class, 'create'])->name('create');
Route::post('/store', [PostController::class, 'store'])->name('store');

Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [PostController::class, 'update'])->name('update');

Route::get('/show/{id}', [PostController::class, 'show'])->name('show');
Route::post('/detail/{id}', [PostController::class, 'detail'])->name('detail');


 