<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\{
    AuthController,
    UserController,
    MedicationController,
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::get('/get_info', [UserController::class, 'getInfo']);
    Route::get('/user/update', [UserController::class, 'update']);

    Route::get('/medications', [MedicationController::class, 'index']);
    Route::post('/medication/create', [MedicationController::class, 'store']);
    Route::delete('/medication/{id}', [MedicationController::class, 'delete']);
    Route::post('/medication/{id}', [MedicationController::class, 'update']);


    Route::post('/logout', [AuthController::class, 'logout']);
});
