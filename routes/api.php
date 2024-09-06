<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route pour le callback de paiement d'Orange Money
Route::post('/paiement/callback', [PaymentController::class, 'handleCallback'])->name('payment.callback');

// Route pour le webhook de paiement d'Orange Money
Route::post('/paiement/webhook', [PaymentController::class, 'handleWebhook'])->name('payment.webhook');
