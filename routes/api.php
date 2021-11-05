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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix("v1")->group(function(){

    Route::prefix("cities")->group(function(){
        Route::get("/", [\App\Http\Controllers\Cities\CityIndexController::class, "index"]);
        Route::get("/{cityId}", [\App\Http\Controllers\Cities\CityShowController::class, "show"]);
    });

    Route::prefix("addresses")->group(function(){
        Route::get("/", [\App\Http\Controllers\Addresses\AddressIndexController::class, "index"]);
        Route::post("/", [\App\Http\Controllers\Addresses\AddressStoreController::class, "store"]);
        Route::put("/{addressId}", [\App\Http\Controllers\Addresses\AddressUpdateController::class, "update"]);
        Route::delete("/{addressId}", [\App\Http\Controllers\Addresses\AddressDeleteController::class, "delete"]);
    });
});
