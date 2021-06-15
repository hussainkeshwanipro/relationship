<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BLogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


Route::get('/', [BLogController::class, 'index'])->name('home');

// one to one relationship
Route::get('user/{id}', [UserController::class, 'index']);
Route::get('user/add', [UserController::class, 'add']);
Route::get('user/update', [UserController::class, 'update']);
Route::get('user/delete', [UserController::class, 'delete']);

//one to many relaitons
Route::get('post', [PostController::class, 'addPost']);
Route::get('comment/{id}', [PostController::class, 'addComment']);
Route::get('getdata/{id}', [PostController::class, 'getData']);

// project work type.. something

Route::get('addPost', [BLogController::class, 'addPost'])->name('addPost');
Route::post('postSubmit', [BLogController::class, 'postSubmit'])->name('postSubmit');
Route::get('demo', [BLogController::class, 'demo'])->name('demo');
Route::get('edit/post/{id}', [BLogController::class, 'editPost']);
Route::post('updatePost', [BLogController::class, 'updatePost'])->name('updatePost');
Route::get('show/post/{id}', [BLogController::class, 'getSingleData']);
Route::get('delete/post/{id}', [BLogController::class, 'deletePost']);
Route::post('addComment', [BLogController::class, 'addComment'])->name('addComment');
Route::get('deleteComment/{id}', [BLogController::class, 'deleteComment']);
