<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashierController;

Route::get('/', function () {
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

