<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StudyController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/users/{user}', [UsersController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UsersController::class, 'update'])->name('users.update');
Route::delete('/users', [UsersController::class, 'destroy'])->name('users.delete');

Route::get('/studies', [StudyController::class, 'index'])->name('studies');
Route::get('/studies/create', [StudyController::class, 'create'])->name('studies.create');
Route::post('/studies', [StudyController::class, 'store'])->name('studies.store');
Route::get('/studies/{study}', [StudyController::class, 'show'])->name('studies.show');
Route::get('/studies/{study}/edit', [StudyController::class, 'edit'])->name('studies.edit');
Route::put('/studies/{study}', [StudyController::class, 'update'])->name('studies.update');
Route::delete('/studies', [StudyController::class, 'destroy'])->name('studies.delete');
