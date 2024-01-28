<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\{
    AuthController,
    UserController,
    MedicationController,
    AllergyController,
    DiseaseController,
    ContactController,
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

    Route::get('/allergies', [AllergyController::class, 'index']);
    Route::post('/allergy/create', [AllergyController::class, 'store']);
    Route::delete('/allergy/{id}', [AllergyController::class, 'delete']);
    Route::post('/allergy/{id}', [AllergyController::class, 'update']);
    
    Route::get('/diseases', [AllergyController::class, 'index']);
    Route::post('/disease/create', [AllergyController::class, 'store']);
    Route::delete('/disease/{id}', [AllergyController::class, 'delete']);
    Route::post('/disease/{id}', [AllergyController::class, 'update']);
    
    Route::get('/contacts', [ContactController::class, 'index']);
    Route::post('/contact/create', [ContactController::class, 'store']);
    Route::delete('/contact/{id}', [ContactController::class, 'delete']);
    Route::post('/contact/{id}', [ContactController::class, 'update']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
