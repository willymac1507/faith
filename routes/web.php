<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ImageController;
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
    Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
    Route::get('/pet/{pet:id}/show', [PetController::class, 'show'])->name('pet.show');
    Route::get('/pets/add', [PetController::class, 'create'])->name('pet.create');
    Route::get('/pet/{pet:id}/edit', [PetController::class, 'edit'])->name('pet.edit');
    Route::post('/pet/{pet:id}/edit', [PetController::class, 'update'])->name('pet.update');
});

Route::middleware('auth')->group(function () {
    Route::post('/pet/{pet:id}/add-image', [ImageController::class, 'store'])->name('image.store');
    Route::get('/pet/{pet:id}/{image:id}/cover', [ImageController::class, 'makeCover'])->name('image.cover');
});

require __DIR__ . '/auth.php';
