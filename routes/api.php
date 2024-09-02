<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\PaymentController;

// Route pour le callback de paiement d'Orange Money
Route::post('/paiement/callback', [PaymentController::class, 'handleCallback'])->name('payment.callback');

// Route pour le webhook de paiement d'Orange Money
Route::post('/paiement/webhook', [PaymentController::class, 'handleWebhook'])->name('payment.webhook');

