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
//Route Sections
Route::get('/', [\App\Http\Controllers\Controller::class, 'home'])->name('home');

//Email section
Route::get('/home#contact', [\App\Http\Controllers\Controller::class, 'contact'])->name('contact');
Route::post('/', [\App\Http\Controllers\MailSend::class, 'store']);
Route::get('edit', [\App\Http\Controllers\ManagerApplication::class, 'edit'])->name('edit');


Route::resource('ManagerApplication',\App\Http\Controllers\ManagerApplication::class);
Route::resource('Post', \App\Http\Controllers\PostControllerController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
