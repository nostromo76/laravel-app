<?php

use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

// Define the route for the home page
Route::view('/', 'welcome');

// Define resource routes for PostController
Route::resource('/posts', PostController::class);

//route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Registration Routes
Route::get('/register', [RegisterUserController::class, 'register'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');

// Login Routes
Route::get('/login', [LoginUserController::class, 'login'])->name('login');
Route::post('/login', [LoginUserController::class, 'store'])->name('login.store');

// Logout Route
Route::post('/logout', [LoginUserController::class, 'logout'])->name('logout');
