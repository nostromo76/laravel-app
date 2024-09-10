<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return 'test';
});
Route::post('/', function (Request $request) {
    return dd($request->all());
});

Route::put('/', function (Request $request) {
    return dd($request->all());
});