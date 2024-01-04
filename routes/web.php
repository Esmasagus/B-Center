<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;

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
    return view('auth.login');
});



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified', ])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('admin', function () {
    return view('auth.login');
})->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';

Route::resource('user', UserController::class)->middleware(['auth', 'verified', 'role:admin']);
Route::resource('supplier', SupplierController::class);
Route::resource('consum','App\Http\Controllers\ConsumController');
Route::resource('makanan','App\Http\Controllers\MakananController');
Route::resource('minuman','App\Http\Controllers\MinumanController');
Route::resource('seragam','App\Http\Controllers\SeragamController');
