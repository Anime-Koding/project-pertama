<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ExperienceController;
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

    //experiences
    Route::apiResource('experiences', ExperienceController::class);

    // Route::apiResource('experiences/{experience}/references', ExperienceController::class)
    //     ->only(['referencesIndex', 'referencesStore', 'referencesDestroy'])
    //     ->names([
    //         'referencesIndex' => 'experience.reference',
    //         'referencesStore' => 'experience.reference.store',
    //         'referencesDestroy' => 'experience.reference.destroy'
    //     ]);
    // Route::apiResource('work-experiences.certificates', WorkExperienceController::class);
});
