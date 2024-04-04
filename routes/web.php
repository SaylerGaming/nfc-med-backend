<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AdminController,
    AuthController,
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', [AuthController::class, 'showAuth'])->name('auth');
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::get('/logout', [AuthController::class, 'logout']);

});

Route::group(['middleware' => ['auth:sanctum', 'role']], function() {
    Route::view('/admin', 'admin.index');
    Route::get('/admin/doctors', [AdminController::class, 'doctors']);
    Route::post('/admin/doctors/add', [AdminController::class, 'add']);
    Route::get('/admin/doctor/{id}', [AdminController::class, 'doctor']);
    Route::post('/admin/doctor/{id}/delete', [AdminController::class, 'delete']);
    Route::post('/admin/doctor/{id}/promote', [AdminController::class, 'promote']);

});