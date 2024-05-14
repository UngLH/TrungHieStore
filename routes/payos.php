<?php

use payos\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::prefix('/payment')->group(function () {
    Route::post('/payos', [PaymentController::class, 'handlePayOSWebhook']);
});