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
    return view('components.home');
});


Route::get('registration', [\App\Http\Controllers\Controller::class, 'registration'])->name('registration');
Route::get('/home', [\App\Http\Controllers\Controller::class, 'home'])->name('home');
Route::post('/home', [\App\Http\Controllers\Controller::class, 'store']);

