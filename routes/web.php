<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\CompanyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vacancy',[VacancyController::class,"getVacancie"] )->name('getVacancies');
Route::get('/vacancy/{id}',[VacancyController::class,"getVacance"] )->name('getVacance');
 
Route::get('/company',[CompanyController::class,"GetCompanies"] )->name('getCompaniesList');
Route::get('/company/{id}',[CompanyController::class,"getCompany"] )->name('getCompany');
