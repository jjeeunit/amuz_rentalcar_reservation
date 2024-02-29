<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ReservsController;


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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', function () {
    return view('welcome');
});


// Route::get('/list', function () {
//     return view('list'); //list.blade.php
// });

// Route::get('/create', function () {
//     return view('create');
// });

// Route::get('/show/{id?}', function ($id = null) {
//     return view('show', compact('id'));
// });

// Route::get('/reservation', function () {
//     return view('reservation');
// });


Route::resource('cars', CarsController::class);
Route::resource('reservs', ReservsController::class);


