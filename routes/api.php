<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestsController;

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

Route::get('/guests', [GuestsController::class, 'index']);
Route::get('/guests/count-by-dj', [GuestsController::class, 'guests']);
Route::get('/guests/count-by-locations', [GuestsController::class, 'guest_locations']);
Route::get('/leader-djs', [GuestsController::class, 'leader_board_djs']);
