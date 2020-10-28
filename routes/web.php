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
Route::post('/profile', [\App\Http\Controllers\AttributeController::class, 'store']);
Route::get('/profile/create', [App\Http\Controllers\AttributeController::class, 'create']) ->name('profile.create');
Route::get('/profile/{id}', [\App\Http\Controllers\AttributeController::class, 'show'])->name('profile.show');

Route::post('/joinFightersList/{gym}', [\App\Http\Controllers\ListOfFightersController::class, 'store']);


Route::get('/gym', [App\Http\Controllers\GymController::class, 'index']) ->name('gym.index');
Route::post('/gym', [GymController::class, 'store']);
Route::get('/gym/create', [GymController::class, 'create'])->name('gym.create');
Route::get('/gym/{id}', [GymController::class, 'show'])->name('gym.show');
Route::get('/gym/{id}/edit', [GymController::class, 'edit'])->name('gym.edit');
Route::put('/gym/{id}', [GymController::class, 'update']);
