<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});
//rotte per le dashboard
//Route::prefix('dashboard')->group(function(){
//    Route::middleware('role:Admin|Staff|Trainer|User')->group(function(){
//        Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
//        Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.dashboard');
//        Route::get('/staff/home', [HomeController::class, 'index'])->name('staff.dashboard');
//        Route::get('/trainer/home', [HomeController::class, 'index'])->name('trainer.dashboard');
//    });
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
