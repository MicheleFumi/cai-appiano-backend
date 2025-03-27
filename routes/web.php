<?php

use App\Http\Controllers\Api\PublicMembersController as ApiPublicMembersController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;



Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/* ROUTE SOLO PER AUTHORIZED */
Route::middleware('auth')->group(function () {
    route::resource('members', MembersController::class);
    route::resource('roles', RoleController::class);
});

/* ROUTE PER REACT */
Route::get('/public/members', [ApiPublicMembersController::class, 'index']);
Route::get('/public/member/{memberId}', [ApiPublicMembersController::class, 'show']);
require __DIR__ . '/auth.php';
