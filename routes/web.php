<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UsersController;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/styleguide', function () {
  return view('styleguide');
});

Route::prefix('admin')->name('admin.')->group(function () {
  Route::redirect('/', '/admin/profile' );
  Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile');
  Route::get('users', [UsersController::class, 'index'])->name('admin.users');
});

Route::prefix('api')->group(function () {
  Route::get('admin/users', [UsersController::class, 'list']);
});