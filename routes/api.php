<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\F1TableController;
use App\Http\Controllers\ChartDataController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// access at uri /api/01
Route::get('01', [F1TableController::class, 'get_01_data']);
// Route::get('01', "ChartDataController@get_01_data");

Route::get('02', [ChartDataController::class, 'get_gender_data']);
Route::get('03', [ChartDataController::class, 'get_ethnicity_data']);
Route::get('04', [ChartDataController::class, 'get_religion_data']);
Route::get('05', [ChartDataController::class, 'get_athlete_data']);
Route::get('06', [ChartDataController::class, 'get_fin_aid_efc_data']);