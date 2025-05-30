<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PayuController;

Route::get('/payu/payment', [PayuController::class, 'paymentForm'])->name('payu.paymentForm');
Route::post('/payu/success', [PayuController::class, 'paymentSuccess'])->name('payu.success');
Route::get('/payu/failure', [PayuController::class, 'paymentFailure'])->name('payu.failure');
