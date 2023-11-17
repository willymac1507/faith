<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
//    Route::get('/pets', [\App\Http\Controllers\PetController::class, 'index'])->name('pets');
//    Route::get('/pets/{pet:id}', [\App\Http\Controllers\PetController::class, 'show'])->name('pet');
    Route::get('/pets/add', [\App\Http\Controllers\PetController::class, 'create'])->name('pet.create');
    Route::post('/pets', [\App\Http\Controllers\PetController::class, 'store'])->name('pet.store');
});

require __DIR__ . '/auth.php';
