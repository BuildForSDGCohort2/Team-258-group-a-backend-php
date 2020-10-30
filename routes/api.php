<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalDetailsController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\DocumentConntroller;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\JobseekerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//dummy data using a controller & shows views
Route::get('uploddocuments', [DocumentConntroller::class, 'create']);
Route::get('dummylanguages', [LanguageController::class,'create']);
Route::get('dummyskills', [SkillController::class,'create']);

//Lists all records
Route::get('personaldetails',[PersonalDetailsController::class, 'index']);
Route::get('addresses',[AddressController::class, 'index']);
Route::get('contactinfos',[ContactInfoController::class, 'index']);
Route::get('socials',[SocialMediaController::class, 'index']);
Route::get('documents', [DocumentConntroller::class, 'index']);
Route::get('languages', [LanguageController::class,'index']);
Route::get('qualifications', [QualificationController::class,'index']);
Route::get('skills', [SkillController::class,'index']);

//list single record
Route::get('personaldetail/{id}',[PersonalDetailsController::class, 'show']);
Route::get('address/{id}',[AddressController::class, 'show']);
Route::get('contactinfo/{id}',[ContactInfoController::class, 'show']);
Route::get('social/{id}',[SocialMediaController::class, 'show']);
Route::get('document/{id}', [DocumentConntroller::class, 'show']);
Route::get('language/{id}', [LanguageController::class,'show']);
Route::get('qualification/{id}', [QualificationController::class,'show']);
Route::get('skill/{id}', [SkillController::class,'show']);

//Creates new record
Route::post('personaldetail',[PersonalDetailsController::class, 'store']);
Route::post('address',[AddressController::class, 'store']);
Route::post('contactinfo',[ContactInfoController::class, 'store']);
Route::post('social',[SocialMediaController::class, 'store']);
Route::post('document', [DocumentConntroller::class, 'store']);
Route::post('language', [LanguageController::class,'store']);
Route::post('qualification', [QualificationController::class,'store']);
Route::post('skill', [SkillController::class,'store']);

//Updates record
Route::put('personaldetail',[PersonalDetailsController::class, 'store']);
Route::put('address',[AddressController::class, 'store']);
Route::put('contactinfo',[ContactInfoController::class, 'store']);
Route::put('social',[SocialMediaController::class, 'store']);
Route::put('document', [DocumentConntroller::class, 'store']);
Route::put('language', [LanguageController::class,'store']);
Route::put('qualification', [QualificationController::class,'store']);
Route::put('skill', [SkillController::class,'store']);

//Deletes record
Route::delete('personaldetail/{id}',[PersonalDetailsController::class, 'destroy']);
Route::delete('address/{id}',[AddressController::class, 'destroy']);
Route::delete('contactinfo/{id}',[ContactInfoController::class, 'destroy']);
Route::delete('social/{id}',[SocialMediaController::class, 'destroy']);
Route::delete('document/{id}', [DocumentConntroller::class, 'destroy']);
Route::delete('language/{id}', [LanguageController::class,'destroy']);
Route::delete('qualification/{id}', [QualificationController::class,'destroy']);
Route::delete('skill/{id}', [SkillController::class,'destroy']);