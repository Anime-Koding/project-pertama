<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//crud
Route::apiResource('experiences', ExperienceController::class);

//crd
Route::apiResource('experiences/{experience}/references', ExperienceController::class)
    ->only(['referencesIndex', 'referencesStore', 'referencesDestroy'])
    ->names([
        'referencesIndex' => 'experience.reference',
        'referencesStore' => 'experience.reference.store',
        'referencesDestroy' => 'experience.reference.destroy'
    ]);
// Route::apiResource('work-experiences.certificates', WorkExperienceController::class);
