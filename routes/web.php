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
    Route::get('/petitions/{id}', 'show');
    Route::post('/petitions', 'list');
    Route::get('/petitions', 'list');
    Route::delete('/petitions/{id}', 'delete');
    Route::patch('/petitions/{id}', 'patch');
});

Route::controller(DivisionController::class)->group(function () {
    Route::get('/divisions', 'list');
});

Route::controller(DistrictController::class)->group(function () {
    Route::get('/districts', 'list');
});
