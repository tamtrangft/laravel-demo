<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/styleguide', function () {
  return view('styleguide');
});

Route::prefix('admin')->name('admin.')->group(function () {
  Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile');
});
