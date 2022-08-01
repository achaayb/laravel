<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API;

use App\Http\Controllers\API\CountriesController;
use App\Http\Controllers\API\CitiesController;

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


Route::get('/countries', [CountriesController::class, 'index']);
Route::get('/countries/{id}', [CountriesController::class, 'show']);
Route::post('/countries', [CountriesController::class, 'store']);

Route::post('/cities', [CitiesController::class, 'store']);
