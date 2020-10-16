<?php

use App\Http\Controllers\GymController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']) ->name('profile');

Route::get('/gym', [App\Http\Controllers\GymController::class, 'index']) ->name('gym');
Route::post('/gym', [GymController::class, 'store']);
Route::get('/gym/create', [GymController::class, 'create']);
Route::get('/gym/{id}', [GymController::class, 'show']);
Route::get('/gym/{id}/edit', [GymController::class, 'edit']);
Route::put('/gym/{id}', [GymController::class, 'update']);
