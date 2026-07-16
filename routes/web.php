<?php

use App\Http\Controllers\MembresController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home.index');
});

Route::get('/membres',[\App\Http\Controllers\MembresController::class,'index'])->name('membres.index');



Route::post('/membres/store',[ \App\Http\Controllers\MembresController::class,'store'])->name('membres.store');
Route::delete('/members/{member}', [MembresController::class, 'destroy'])
    ->name('members.destroy');

Route::get('/membres/{id}/edit',
    [MembresController::class,'edit']
)->name('membres.edit');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
