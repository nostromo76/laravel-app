<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test', function () {
//     return 'test';
// });
// Route::post('/post',[PostController::class,'store']); 
// route::put('/{id}', function (Request $request, $id) {  
//       return $id;});

//       route::delete('/{id}', function ($id) {  
//         return $id;

//     });
Route::view('/','welcome');
Route::resource('/posts',PostController::class);