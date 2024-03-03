<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;



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



Route::resource('cars', CarsController::class);

Route::get('/cars/reservation/{id}', [CarsController::class, 'reservation'])->name('cars.reservation');

Route::post('/cars/stores', [CarsController::class, 'stores'])->name('cars.stores');

Route::post('/cars/duplicate', [CarsController::class, 'duplicate'])->name('cars.duplicate');

