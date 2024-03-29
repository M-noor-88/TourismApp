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
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //  Dashboard
    Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

    // Destinations
    Route::get('/dest', function () {
            return view('destenation');
        })->name('dest');

    // Cars
    Route::get('/cars', function () {
            return view('car');
        })->name('cars');

    // Country
    Route::get('/countries', function () {
            return view('country');
        })->name('countries');

    
    // Country
    Route::get('/hotels', function () {
            return view('hotels');
        })->name('hotels');

    // flights
    Route::get('/flights', function () {
            return view('flights');
        })->name('flights');

    
    
    

});








// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
