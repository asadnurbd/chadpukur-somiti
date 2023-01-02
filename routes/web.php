<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


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


// Route::get('/',[HomeController::class,'index']);
Route::get('/',[AdminController::class,'index']);
Route::post('/admin-login',[AdminController::class,'login']);
Route::get('/admin-logout',[AdminController::class,'logout']);
// Route::get('/home',[HomeController::class,'index']);
Route::get('/user-create-form',[HomeController::class,'user_create_form']);
Route::get('/all-user-information',[HomeController::class,'all_user_information']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/songoroho-talika',[HomeController::class,'songoroho_talika']);
Route::get('/abbhantorin-check',[HomeController::class,'abbhantorin_check']);


Route::post('/user-admission-form', [HomeController::class, 'user_admission_form']);

Route::post('/anusangik-khroch-form', [HomeController::class, 'anusangik_khroch_form']);
Route::post('/abbhantorin-check-form', [HomeController::class, 'abbhantorin_check_form']);

// khroch-talika router
Route::get('/khroch-talika', [HomeController::class, 'khroch_talika']);
Route::post('/khroch-talika-month-data', [HomeController::class, 'khroch_talika_month_data']);

Route::post('/roshid-submit/{id}', [HomeController::class, 'roshid_submit']);

Route::get('/particuler-user-info/{id}', [HomeController::class, 'particuler_user_info']);
// total-income-expenditure
Route::get('/total-income-expenditure', [HomeController::class, 'total_income_expenditure']);
Route::post('/total-income-expenditure-month-date', [HomeController::class, 'total_income_expenditure_month_date']);
Route::post('/total-income-expenditure-year', [HomeController::class, 'total_income_expenditure_year']);
Route::get('/anusangik-ai',[HomeController::class,'anusangik_ai']);
Route::get('/total-share', [HomeController::class, 'total_share']);
Route::post('/balane-shite', [HomeController::class, 'balane_shite']);

Route::get('/rijab-fund/{id}', [HomeController::class, 'rijab_fund']);
Route::get('/total-rijab-fund-talika', [HomeController::class, 'total_rijab_fund_talika']);
Route::post('/total-rijab-fund-talika-year', [HomeController::class, 'total_rijab_fund_talika_year']);



Route::get('/rijab-fund-uttolon/{id}', [HomeController::class, 'rijab_fund_uttolon']);
Route::get('/total-fund-share', [HomeController::class, 'total_fund_share']);