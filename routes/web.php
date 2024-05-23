<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\CashierController;


// Rute untuk halaman login, halaman utama, dan halaman lainnya


Route::get('/ ', function () {
    return view('login');
});
Route::get('/cashier', function () {
    return view('cashier/cashier');
});
Route::get('/transactions', function () {
    return view('cashier/transactions');
});
Route::get('/admin', function () {
    return view('admin/admin');
});
Route::get('/manager', function () {
    return view('manager/manager');
});
Route::get('/managerproduk', function () {
    return view('manager/managerproduk');
});
Route::get('/managerlog', function () {
    return view('manager/managerlog');
});
Route::get('/managertransactions', function () {
    return view('manager/managertransactions');
});

// Route for displaying the login form
Route::get('/login', [LoginController::class, ])->name('login');

// Route for handling the login form submission
Route::post('/login', [LoginController::class, 'login']);
