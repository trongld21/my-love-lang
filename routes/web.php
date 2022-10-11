<?php

use App\Http\Controllers\Member\AuthController;
use App\Http\Controllers\Member\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home');
})->name('home');

Route::prefix('member')->name('member.')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login-form');
    Route::post('/login', [AuthController::class, 'login'])->name('login-action');

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});