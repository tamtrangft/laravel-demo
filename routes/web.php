<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\IsAdminCheck;
use Illuminate\Contracts\View\View;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'newUser'])->middleware([IsAdminCheck::class]);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/styleguide', function () {
  return view('styleguide');
});

Route::prefix('admin')->name('admin.')->middleware([IsAdminCheck::class])->group(function () {
  Route::redirect('/', '/admin/profile' );
  Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile');
  Route::get('users', [UsersController::class, 'index'])->name('admin.users');
});

Route::prefix('api')->group(function () {
  Route::get('admin/users', [UsersController::class, 'list']);
});

Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerController@index');