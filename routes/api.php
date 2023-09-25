<?php

use App\Http\Controllers\VideogameController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

//Route::resource('videogames', VideogameController::class);

//Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/videogames', [VideogameController::class, 'index']);





//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/videogames', [VideogameController::class, 'store']);
    Route::put('/videogames/{id}', [VideogameController::class, 'update']);
    Route::delete('/videogames/{id}', [VideogameController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/videogames/{id}', [VideogameController::class, 'show']);
    Route::get('/videogames/order/{orderType}', [VideogameController::class, 'order']);
    Route::get('/videogames/filter/{genre}', [VideogameController::class, 'filter']);

});




