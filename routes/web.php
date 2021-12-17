<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get("User/{user}",[User::class,'index']);
// Route::get("User",[User::class,'index']);

Route::view('/index', 'index');
Route::view('/home', 'home');
Route::view('/noaccess', 'noaccess  ');
Route::view('/user', 'user');
Route::post('user', [UserController::class, ('getData')])->name('user');


// Route::view('/user', 'user')->middleware('ProtectedPage');
// Route::group(['middleware'=>['ProtectedPage']],function(){
    
// });