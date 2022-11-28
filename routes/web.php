<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route Home
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::resource('colors', ColorController::class);
Route::resource('cars', CarController::class);
Route::get('/section', [HomeController::class, 'section'])->name('section');
