<?php

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/index', [HomeController::class, 'index'])->name('index.index');

Route::get('/list', function () {
    return view('list'); //list.blade.php
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/show/{id?}', function ($id = null) {
    return view('show', compact('id'));
});

Route::get('/reservation', function () {
    return view('reservation');
});