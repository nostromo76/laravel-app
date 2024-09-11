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
route::put('/{id}', function (Request $request, $id) {  
      return $id;});

      route::delete('/{id}', function ($id) {  
        return $id;});