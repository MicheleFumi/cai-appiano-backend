<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('escursioni', function () {
    return view('escursioni');
})->name('escursioni');

Route::get('direttivo', function () {
    return view('direttivo');
})->name('direttivo');

Route::get('storia', function () {
    return view('storia');
})->name('storia');

Route::get('collaboratori', function () {
    return view('collaboratori');
})->name('collaboratori');

Route::get('documenti', function () {
    return view('documenti');
})->name('documenti');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
