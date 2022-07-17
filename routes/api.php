<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\F1TableController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// access at uri /api/01
Route::get('01', [F1TableController::class, 'get_01_data']);
// Route::get('01', "ChartDataController@get_01_data");