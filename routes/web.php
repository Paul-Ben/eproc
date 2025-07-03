<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', [FrontEndController::class, 'about'])->name('about');
Route::get('tenders', [FrontEndController::class, 'tenders'])->name('tenders');
Route::get('awards', [FrontEndController::class, 'awards'])->name('awards');
Route::get('news', [FrontEndController::class,'news'])->name('news');
Route::get('press', [FrontEndController::class,'press'])->name('press');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
