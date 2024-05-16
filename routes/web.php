<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\IsAdminCheck;
use App\Http\Middleware\LocaleMiddleware;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'newUser'])->middleware([IsAdminCheck::class]);
Route::post('/register', [AuthController::class, 'register'])->middleware([IsAdminCheck::class]);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/styleguide', function () {
  return view('styleguide');
})->middleware(['auth']);

Route::prefix('admin')->name('admin.')->middleware([IsAdminCheck::class])->group(function () {
  Route::redirect('/', '/admin/profile');
  Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile');
  Route::get('users', [UsersController::class, 'index'])->name('admin.users');
});

Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerController@index');

Route::prefix('kh')->middleware([LocaleMiddleware::class])->group(function () {
  Route::get('/', [WelcomeController::class, 'index']);
});

// should be in API route with Laravel Sanctum
Route::prefix('api')->group(function () {
  Route::get('admin/users', [UsersController::class, 'list']);
});
