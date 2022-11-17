<?php

use Superwen\AuthAttempts\Http\Controllers\AuthAttemptsController;

Route::get('auth/login', AuthAttemptsController::class.'@getLogin');
Route::post('auth/login', AuthAttemptsController::class.'@postLogin');
