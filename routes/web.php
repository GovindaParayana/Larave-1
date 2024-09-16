<?php

// use App\Http\Controllers\PostController;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('hello','App\http\Controllers\HelloController@index' );
// Route::get('hello', [HelloController::class,'index'] );
// Route::get('world', [HelloController::class,'world_message'] );

// Route::resource('posts', PostController::class);


Route::get('posts', [PostController::class, 'index']);
Route::get('posts/create', [PostController::class,'create']);
Route::get('posts/{id}', [PostController::class, 'show']);
Route::post('posts', [PostController::class, 'store']);