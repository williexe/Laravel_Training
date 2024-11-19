<?php
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\priceController;
use App\Http\Controllers\amountController;
use App\Http\Controllers\stocklevelController;
use App\Http\Controllers\customersController;
use App\Http\Controllers\expDateController;
use App\Http\Controllers\firstController;
use App\Http\Controllers\secondController;
use App\Http\Controllers\thirdController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\TransactionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
});



Route::get('/invoices',[InvoiceController::class, 'index']);

Route::get('/invoices-create',[InvoiceController::class, 'create']);


Route::get('/amount',[amountController::class, 'getAmount']);

Route::get('/stocklevel',[stocklevelController::class, 'getLevel']);

Route::get('/customers',[customersController::class, 'getCustomers']);

Route::get('/expirydate',[expDateController::class, 'getExpDate']);

Route::get('/firstController',[firstController::class, 'showFirst']);

Route::get('/secondController',[secondController::class, 'showSecond']);

Route::get('/thirdController',[thirdController::class, 'showThird']);

Route::post('/profile',[ProfileController::class, 'create']);

Route::get('/purchase-create',[PurchaseController::class, 'create']);
Route::post('/purchase-store',[PurchaseController::class, 'store']);

Route::get('/transaction-create',[TransactionController::class, 'create']);
Route::post('/transaction-store',[TransactionController::class, 'store']);

Route::get('/price-create',[PriceController::class, 'create']);
Route::post('/price-store',[PriceController::class, 'store']);



