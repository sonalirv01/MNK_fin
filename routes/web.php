<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TwoFactorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome2');
});


Route::middleware('auth')->group(function () {
    Route::get('/two-factor', [TwoFactorController::class, 'index'])->name('two-factor.index');
    Route::post('/two-factor', [TwoFactorController::class, 'verify'])->name('two-factor.verify');
});

/* USER MIDDLEWARE */
Route::middleware('auth', 'twofactor')->group(function () {
    /* USER ROUTES */
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/* ADMIN MIDDLEWARE */
Route::middleware('auth', 'admin', 'twofactor')->group(function () {
    /* ADMIN ROUTES */
    Route::get('/admin-dashboard', [AdminUserController::class, 'index'])->name('admin-dashboard.index');
    Route::get('/admin/user-create', [AdminUserController::class, 'create'])->name('user.create');
    Route::post('/admin/user', [AdminUserController::class, 'store'])->name('user.store');
    Route::get('/fund/transfer/{user_id}', [AdminUserController::class, 'transferView'])->name('fund.view');
    Route::post('/fund/transferring', [AdminUserController::class, 'transferFund'])->name('fund.transfer');
});

require __DIR__ . '/auth.php';
