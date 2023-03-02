<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserControllerPagina;
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


Route::get('/', [UserControllerPagina::class, 'index'])->name('Uploadpag.index');
Route::get('/Uploadpag', [UserControllerPagina::class, 'Uploadpag'])->middleware(['auth', 'verified'])->name('criacao.Uploadpag');
Route::post('/uploadproduct', [UserControllerPagina::class, 'store'])->name('uploadproduct');
Route::get('/show', [UserControllerPagina::class, 'show'])->name('visualizar.show');

Route::get('/download/{file}', [UserControllerPagina::class, 'download'])->name('download');
Route::get('/view/{is}', [UserControllerPagina::class, 'view'])->name('visualiza.view');








Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
