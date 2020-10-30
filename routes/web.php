<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaDetailsController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\JobseekerController;
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
Route::get('/getJobseekers',[JobseekerController::class, 'index']);
Route::get('/getJobseeker',[JobseekerController::class, 'create']);
//Route::get('/getPersonalDetails',[PersonaDetailsController::class, 'index']);
Route::get('/getContactInfo',[ContactInfoController::class, 'index']);
Route::get('/getAddress',[AddressController::class, 'index']);
Route::get('/getPersonsAddress',[AddressController::class, 'join']);
Route::get('/getSocials',[SocialMediaController::class, 'index']);
Route::get('/getSocialsMeadiaAddress',[SocialMediaController::class, 'joinSocial']);
// Create file upload form
Route::get('/documentupload', [DocumentController::class, 'createForm']);
Route::get('/getdocumentupload', [DocumentController::class, 'index']);

// Store file
Route::post('/documentupload', [DocumentController::class,'fileUpload'])->name('fileUpload');
Route::get('/language', [LanguageController::class,'create']);
Route::get('/lang', [LanguageController::class,'destroy']);
Route::get('/qualification', [QualificationController::class,'index']);
Route::get('/skills', [SkillController::class,'index']);
Route::get('/skill', [SkillController::class,'create']);
Route::get('/skil', [SkillController::class,'destroy']);
Route::get('/languages', [LanguageController::class,'index']);