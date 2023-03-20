<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [ArticleController::class, 'index'])
->name('articles.index');

Route::get('qsn', function() {
    return view('/qsn');
});

Route::get('contact', function() {
    return view('/contact');
});

Route::get('accueil', function() {
    return view('/accueil');
});


Route::middleware(['auth'])->group(function() {

    Route::resource('articles', ArticleController::class)
-> except('index');

    Route::resource('carts', CartController::class);

   

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';