<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LocationController;
use \App\Http\Controllers\AppointmentController;

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

// Location routes
Route::get('locations',[LocationController::class, 'index']);
Route::get('locations/{id}',[LocationController::class, 'findById']);
Route::get('locations/search/{name}',[LocationController::class, 'findByName']);

// Appointment routes
Route::get('appointments',[AppointmentController::class, 'index']);
Route::get('appointments/{id}',[AppointmentController::class, 'findById']);
Route::get('appointments/location/{id}',[AppointmentController::class, 'findByLocation']);

// User routes

Route::get('users/appointment/{id}',[UserController::class, 'findByAppointmentId']);

Route::post('auth/login', [\App\Http\Controllers\AuthController::class, 'login']);

//Auth goes everything that needs to be used by admin or login
Route::group(['middleware'=>['api','auth.jwt']],function() {
    //Locations for auth
    Route::post('locations',[LocationController::class, 'save']);
    Route::put('locations/{id}',[LocationController::class, 'update']);
    Route::delete('locations/{id}',[LocationController::class, 'delete']);

    //APPOINTMENT for auth
    Route::post('appointments',[AppointmentController::class, 'save']);
    Route::put('appointments/{id}',[AppointmentController::class, 'update']);
    Route::delete('appointments/{id}',[AppointmentController::class, 'delete']);

    //USER for auth

    Route::get('users',[UserController::class, 'index']);
    Route::get('users/{id}',[UserController::class, 'findById']);
    Route::get('users/email/{email}',[UserController::class, 'findByEmail']);
    Route::post('users',[UserController::class, 'save']);
    Route::put('users/{id}',[UserController::class, 'update']);
    Route::put('users/appointments/{id}/{appId}', [UserController::class, 'updateAppointment']);
    Route::put('users/vaccinate/{id}', [UserController::class, 'updateVaccination']);
    Route::delete('users/{id}',[UserController::class, 'delete']);
});
