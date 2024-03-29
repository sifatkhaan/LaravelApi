<?php

use App\Http\Controllers\ItemCon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serviceController;

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
Route::get('/service',[serviceController::class, 'index']);
Route::post('/service',[serviceController::class, 'store']);
Route::get('/item',[ItemCon::class,'index']);
Route::post('/item',[ItemCon::class,'store']);

