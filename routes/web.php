<?php
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\priceController;
use App\Http\Controllers\amountController;
use App\Http\Controllers\stocklevelController;
use App\Http\Controllers\customersController;
use App\Http\Controllers\expDateController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/invoices',[InvoiceController::class, 'index']);

Route::get('/invoices-create',[InvoiceController::class, 'create']);

Route::get('/price',[priceController::class, 'getPrices']);

Route::get('/amount',[amountController::class, 'getAmount']);

Route::get('/stocklevel',[stocklevelController::class, 'getLevel']);

Route::get('/customers',[customersController::class, 'getCustomers']);

Route::get('/expirydate',[expDateController::class, 'getExpDate']);









