<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/procurar', function () {
    return view('procurar');
});





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard',[DashboardController::class, 'show'])->name('dashboard');
    Route::get('/remover/{id}',[DashboardController::class, 'delete'])->name('delete');

    Route::post('/criar', [ArtigoController::class, 'store'])->name('artigo.create');
    Route::get('/criar', function () {
        return view('criar');
    });
});

require __DIR__.'/auth.php';
