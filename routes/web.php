<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store'])
->name('users.store');
Route::get('/users/{id}/edit', [UsersController::class, 'edit'])
->name('users.edit');
Route::put('/users/{id}', [UsersController::class, 'update'])
->name('users.update');
Route::delete('/users/{id}', [UsersController::class, 'destroy'])
->name('users.destroy');
/* users.restore */
Route::put('/users/restore', [UsersController::class, 'restore'])->name('users.restore');
