<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


Route::get('/posts', [PostsController::class,'index'])->middleware("auth");
Route::get('/posts/create', [PostsController::class,'create'])->middleware("auth");
Route::get('/posts/{id}',[PostsController::class,'view'] )->middleware("auth");

Route::post('/posts',[PostsController::class,'store'] )->middleware("auth");
Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->middleware("auth");
Route::put('/posts/{id}',[PostsController::class,'update'] )->middleware("auth");
Route::delete('/posts/{id}',[PostsController::class,'destroy'])->middleware("auth");


Route::redirect('/', '/login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
