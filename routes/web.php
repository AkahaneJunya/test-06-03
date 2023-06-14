<?php

use Illuminate\Support\Facades\Route;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [PostController::class, 'index']);

//"/"にアクセスした時にPOstController内のclass内のindexというメソッド(関数)を返す。

Route::get('/posts/create',[PostController::class,'create']);
Route::get('/posts/{post}',[PostController::class,'show']);
//{}内のpostは変化する、idの値が入る
Route::post('/posts',[PostController::class,'store']);