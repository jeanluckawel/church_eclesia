<?php

use App\Http\Controllers\MembresController;
use App\Http\Controllers\PastoralController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.index');
});

Route::get('/membres',[\App\Http\Controllers\MembresController::class,'index'])->name('membres.index');







Route::get('/inactif',[ \App\Http\Controllers\MembresController::class,'inactif'])->name('membres.inactif');



Route::post('/membres/store',[ \App\Http\Controllers\MembresController::class,'store'])->name('membres.store');
Route::delete('/members/{member}', [MembresController::class, 'destroy'])
    ->name('members.destroy');

Route::get('/membres/{id}/edit',
    [MembresController::class,'edit']
)->name('membres.edit');

Route::put('/membres/{id}/status',
    [MembresController::class,'changeStatus']
)->name('membres.status');


//Route::get('/pastoral',[\App\Http\Controllers\PastoralController::class,'index'])->name('pastoral.index');
//Route::post('/pastorals',
//    [PastoralController::class,'store']
//)->name('pastorals.store');
//
//Route::put('/pastorals/{id}',
//    [PastoralController::class, 'update']
//)->name('pastorals.update');
//
//
//
//Route::delete('/pastorals/{id}',
//    [PastoralController::class, 'destroy']
//)->name('pastorals.destroy');





Route::get('/pastoral',
    [PastoralController::class,'index']
)->name('pastoral.index');


Route::post('/pastorals',
    [PastoralController::class,'store']
)->name('pastorals.store');


Route::put('/pastorals/{id}',
    [PastoralController::class,'update']
)->name('pastorals.update');


Route::delete('/pastorals/{id}',
    [PastoralController::class,'destroy']
)->name('pastorals.destroy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
