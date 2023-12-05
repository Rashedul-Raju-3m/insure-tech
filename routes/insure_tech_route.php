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
Route::get('/ins/{slug}/details/{session}', [InsuranceController::class, 'InsuranceQueryDetails'])->name('ins_insurance_details');
Route::post('/ins/{slug}/step1/{session}', [InsuranceController::class, 'InsuranceSubmit1'])->name('ins_insurance_submit_1');
Route::post('/ins/{slug}/step2/{session}', [InsuranceController::class, 'InsuranceSubmit2'])->name('ins_insurance_submit_2');
Route::post('/ins/{slug}/step3/{session}', [InsuranceController::class, 'InsuranceSubmit3'])->name('ins_insurance_submit_3');
Route::post('/ins/{slug}/step4/{session}', [InsuranceController::class, 'InsuranceSubmit4'])->name('ins_insurance_submit_4');
Route::get('/division/wise/district/user', [InsuranceController::class, 'getDivisionWiseDistrictDropdown'])->name('get_division_wise_district_user');
Route::get('/insurance-query-form-4', [InsuranceController::class, 'getQueryForm4'])->name('get_query_form_4');
Route::get('/district/wise/upazila/user', [InsuranceController::class, 'getDistrictWiseUpazilaDropdown'])->name('get_district_wise_upazila_user');

