<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\IndexController;



//Route::get('/', function () {
    //return Inertia::render('welcome', [
       // 'canRegister' => Features::enabled(Features::registration()),
    //]);
//})->name('home');

Route::get('/', [IndexController::class, 'index']);


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
