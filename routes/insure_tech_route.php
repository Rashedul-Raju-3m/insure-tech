<?php

use App\Http\Controllers\Insurance\InsuranceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Insure tech Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/ins/{slug}', [InsuranceController::class, 'InsuranceStart'])->name('ins_start');
Route::post('/ins/session-store', [InsuranceController::class, 'InsuranceSessionStore'])->name('ins_session_store');
Route::post('/ins/otp-check', [InsuranceController::class, 'InsuranceOtpCheck'])->name('ins_opt_check');
Route::get('/ins/{slug}/{session}', [InsuranceController::class, 'InsuranceQuery'])->name('ins_insurance_query');

