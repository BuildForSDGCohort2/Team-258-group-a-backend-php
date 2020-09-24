<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaDetailsController;
use App\Http\Controllers\ContactInfoController;
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
