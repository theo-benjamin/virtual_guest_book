<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route to retrieve all entries
Route::get('/all',[\App\Http\Controllers\Api\VirtualGuestBookController::class,'retrieve']);
// Route to retrieve entry based on ID
Route::get('/{id}',[\App\Http\Controllers\Api\VirtualGuestBookController::class,'retrieve_by_id']);

// Route to create entries
Route::post('/create',[\App\Http\Controllers\Api\VirtualGuestBookController::class,'create']);

// Route to update entry
Route::post('/edit/{id}',[\App\Http\Controllers\Api\VirtualGuestBookController::class,'edit']);

// Route to delete entries
Route::delete('/delete/{id}',[\App\Http\Controllers\Api\VirtualGuestBookController::class,'delete']);