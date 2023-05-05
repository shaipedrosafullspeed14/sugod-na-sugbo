<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiriesController;
use App\Http\Controllers\CharitiesController;
use App\Http\Controllers\TestController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Charities
Route::get('fetchCharities', [CharitiesController::class, 'fetchCharities']);
Route::post('createCharities', [CharitiesController::class, 'createCharities']);

//Inquiries
Route::post('createInquiries', [InquiriesController::class, 'createInquiries']);
// Route::post('create', [TestController::class, 'create']);
// Route::get('home', [TestController::class, 'index']);
// Route::put('edit', [TestController::class, 'edit']);
// Route::delete('delete', [TestController::class, 'delete']);