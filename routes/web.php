<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaDetailsController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\AddressController;
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
Route::get('/getPersonalDetails',[PersonaDetailsController::class, 'index']);
Route::get('/getContactInfo',[ContactInfoController::class, 'index']);
Route::get('/getAddress',[AddressController::class, 'index']);
Route::get('/getPersonsAddress',[AddressController::class, 'join']);
