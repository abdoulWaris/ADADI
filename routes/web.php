<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\payementController;
use App\Http\Controllers\statistiqueController;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/accueil', function () {
    return view('mainpage');
})->name('home');

Route::get('/payment/error', function () {
    return view('payement.cancel');
})->name('payement.cancel');

Route::get('/payment/callback', function () {
    return view('payement.callback');
})->name('payement.callback');

Route::get('/payment/success', function () {
    return view('payement.success');
})->name('payement.status');

Route::get('/payment', [App\Http\Controllers\payementController::class, 'index'])->name('AccueilPaie');

Route::post('/paymentProcess', [App\Http\Controllers\payementController::class, 'getPaiementAndStatus'])->name('paiement');

Route::get('/paymentStatus', [App\Http\Controllers\payementController::class, 'getPaiementAndStatus'])->name('payement.status');

Route::get('/listeUtilisateur',[adminController::class, 'index'])->name('user');
Route::get('/Modifier/utlisateur/{user}',[App\Http\Controllers\adminController::class, 'show'])->name('user.show');
Route::put('/Modifier/utlisateur/{user}',[App\Http\Controllers\adminController::class, 'update'])->name('user.update');
Route::post('/Supprimer/utlisateur/{user}',[App\Http\Controllers\adminController::class, 'destroy'])->name('user.destroy');

Route::get('/listeTransactions', [App\Http\Controllers\payementController::class, 'getTransactions'])->name('listePaie');

Route::get('/statistiquesTransactions', [statistiqueController::class, 'getStats'])->name('statistiques');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
