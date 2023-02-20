<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/** ログインサンプル */
Route::get('/login', [UserLoginController::class, 'index'])->name('login.index');
Route::post('/login', [UserLoginController::class, 'login'])->name('login.post');



