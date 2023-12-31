<?php

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

Route::post('create-invoice', [App\Http\Controllers\InvoiceController::class, 'getToken'])->name('create-invoice');

Route::get('get-token', [App\Http\Controllers\CubaanController::class, 'getToken'])->name('get-token');
Route::post('get-token', [App\Http\Controllers\CubaanController::class, 'getToken'])->name('get-token');

Route::get('make-payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment.index');
Route::post('make-payment', [App\Http\Controllers\PaymentController::class, 'updatePayment'])->name('update-payment');

