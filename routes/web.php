<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\PetitionController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('courts', CourtController::class);

Route::get(
    '/user/profile',
    [UserController::class, 'show']
)->name('profile');

Route::controller(PetitionController::class)->group(function () {
    Route::get('/petitions/{id}', 'getSinglePetition');
    Route::post('/petitions', 'petitions');
    Route::get('/petitions', 'getPetitions');
    Route::delete('/petitions/{id}', 'delete');
    Route::patch('/petitions/{id}', 'patch');
});

Route::controller(DivisionController::class)->group(function () {
    Route::get('/divisions', 'list');
});

Route::controller(DistrictController::class)->group(function () {
    Route::get('/districts', 'list');
});
