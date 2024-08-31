<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoanApplicationController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => 'can:isAdmin', 'prefix' => 'admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('loan',LoanApplicationController::class,['as' => 'admin']);
});

Route::get('loan-application', [ApplicationController::class, 'index'])->name('loan.application.form');
Route::post('loan-application', [ApplicationController::class, 'store'])->name('loan.application.store');

require __DIR__ . '/auth.php';
