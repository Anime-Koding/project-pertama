<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CertificateController;
use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\ReferenceController;
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

//API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('logoutall', [AuthController::class, 'logoutall']);

    //references
    Route::apiResource('references/{type}/{typeId}', ReferenceController::class)
        ->only(['index', 'store']);
    Route::apiResource('references', ReferenceController::class)
        ->only(['show', 'destroy']);

    //certificates
    Route::apiResource('certificates/{type}/{typeId}', CertificateController::class)
        ->only(['index', 'store']);
    Route::apiResource('certificates', CertificateController::class)
        ->only(['destroy']);

    //experiences
    Route::apiResource('experiences', ExperienceController::class);
});
