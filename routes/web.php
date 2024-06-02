<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AdminController,
    AuthController,
    ProfileController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [ProfileController::class, 'index']);
Route::get('/auth', [AuthController::class, 'showAuth'])->name('auth');
Route::get('/profile/show', [ProfileController::class, 'display']);
Route::get('/profile/show/{email}/{slug}', [ProfileController::class, 'show']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::get('/profile/edit', [ProfileController::class, 'edit']);
    Route::post('/profile/disease/add', [ProfileController::class, 'addDisease']);
    Route::post('/profile/allergy/add', [ProfileController::class, 'addAllergy']);
    Route::post('/profile/medication/add', [ProfileController::class, 'addMedication']);
    Route::post('/profile/contact/add', [ProfileController::class, 'addContact']);
    Route::post('/profile/update', [ProfileController::class, 'update']);
    Route::post('/profile/blood/update', [ProfileController::class, 'updateBlood']);
    Route::post('/profile/hospital/update', [ProfileController::class, 'updateHospital']);
    Route::get('/profile/disease/delete/{id}', [ProfileController::class, 'deleteDisease']);
    Route::get('/profile/allergy/delete/{id}', [ProfileController::class, 'deleteAllergy']);
    Route::get('/profile/medication/delete/{id}', [ProfileController::class, 'deleteMedication']);
    Route::get('/logout', [AuthController::class, 'logout']);

});

Route::group(['middleware' => ['auth:sanctum', 'role']], function() {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/doctors', [AdminController::class, 'doctors']);
    Route::post('/admin/doctors/add', [AdminController::class, 'add']);
    Route::get('/admin/doctor/{id}', [AdminController::class, 'doctor']);
    Route::post('/admin/doctor/{id}/delete', [AdminController::class, 'delete']);
    Route::post('/admin/doctor/{id}/promote', [AdminController::class, 'promote']);
});