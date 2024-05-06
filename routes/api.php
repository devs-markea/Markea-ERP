<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebSitesController;


Route::post('/sendRequest', [WebSitesController::class, 'sendRequest']);
Route::post('/save-form-data', [WebSitesController::class, 'saveFormData']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
