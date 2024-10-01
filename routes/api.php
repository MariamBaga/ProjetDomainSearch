<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DomainSearchApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route pour renouveler un domaine
Route::POST('/renew-domains', [DomainSearchApiController::class, 'renewDomain'])->name('domain.Renew');

//route pour le transfer
Route::post('/transfer', [DomainSearchApiController::class, 'transferDomain'])->name('domain.Transfer');
Route::POST('/register-domains', [DomainSearchApiController::class, 'registerDomains'])->name('domain.register');


Route::GET('/fetch-domains', [DomainSearchApiController::class, 'fetchDomains'])->name('domain.fetch');


// Route pour le callback de paiement d'Orange Money
Route::post('/paiement/callback', [PaymentController::class, 'handleCallback'])->name('payment.callback');



// Route pour le webhook de paiement d'Orange Money
Route::post('/paiement/webhook', [PaymentController::class, 'handleWebhook'])->name('payment.webhook');

