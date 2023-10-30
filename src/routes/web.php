<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;

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

Route::get('/', [AuthenticatedSessionController::class, 'index']);



Route::get('/register',[RegisteredUserController::class, 'create'])->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');



Route::get('/login',[AuthenticatedSessionController::class,'create']);

Route::post('/attendance',[AuthenticatedSessionController::class,'store']);

Route::get('/index',[AuthenticatedSessionController::class,'index1']);