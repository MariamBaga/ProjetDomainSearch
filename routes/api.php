<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DomainSearchApiController;
use App\Http\Controllers\RenewController;
use App\Http\Controllers\TransferController;



Route::get('/user', function (Request $request) {
    return $request->user();

})->middleware('auth:sanctum');

// Route pour renouveler un domaine
Route::middleware(['auth:sanctum'])->group(function () {



});





// Route pour le callback de paiement d'Orange Money
Route::post('/paiement/callback', [PaymentController::class, 'handleCallback'])->name('payment.callback');

// Route pour le callback de paiement d'Orange Money
Route::post('/paiement/callback/renouvellement', [RenewController::class, 'handleCallbackrenew'])->name('payment.callback.renew');

// Route pour le callback de paiement d'Orange Money
Route::post('/paiement/callback/transfer', [TransferController::class, 'handleCallbacktransfer'])->name('payment.callback.tranfer');



// Route pour le webhook de paiement d'Orange Money
Route::post('/paiement/webhook', [PaymentController::class, 'handleWebhook'])->name('payment.webhook');

