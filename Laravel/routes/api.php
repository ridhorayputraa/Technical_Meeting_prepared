<?php

use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\UserController;
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


// Buat nge handle API
// Kalo udah login boleh nge akses ini
Route::middleware('auth:sanctum')->group(function (){
    // Grouping Auth sanctum middlewre -> security
    // Route::get('user', [UserController::class, 'l']);
});

// Kalo belom login yang ini
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::get('book', [BookController::class, 'all']);


