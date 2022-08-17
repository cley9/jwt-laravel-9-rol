<?php

use App\Http\Controllers\loginController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


Route::post('/UserCreate', [loginController::class ,'createUser']);
Route::post('/UserLogin', [loginController::class ,'loginUser']);

Route::middleware('admin')->group(function () {
            Route::get('/admin', [loginController::class ,'info']);
        });
        Route::middleware('user')->group(function () {
            Route::get('user', function() {
                return Auth::user()->rol;
            });

            Route::post('/logout', [loginController::class ,'logoutUser']);
});
