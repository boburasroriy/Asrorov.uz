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
Route::get('/home', [\App\Http\Controllers\MainController::class, 'home'])->name('home');
Route::get('/about', [\App\Http\Controllers\MainController::class, 'about'])->name('about');
Route::get('/projects' , [\App\Http\Controllers\MainController::class, 'projects'])->name('projects');
Route::get('/Achievements', [\App\Http\Controllers\MainController::class, 'Achievements'])->name('Achievements');
Route::get('/contact', [\App\Http\Controllers\MainController::class, 'contact'])->name('contact');
