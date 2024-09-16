<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Define the route for the home page
Route::view('/', 'welcome');

// Define resource routes for PostController
Route::resource('/posts', PostController::class);

//route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');