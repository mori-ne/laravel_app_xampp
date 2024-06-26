<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrganizeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [OrganizeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/show/{userId}', [OrganizeController::class, 'show']);
Route::get('/dashboard/edit/{userId}', [OrganizeController::class, 'edit']);
Route::put('/dashboard', [OrganizeController::class, 'update']);
Route::delete('/dashboard', [OrganizeController::class, 'delete']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
