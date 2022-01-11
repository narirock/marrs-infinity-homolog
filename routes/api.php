<?php

use App\Http\Controllers\API\HomologWebhook;
use App\Http\Controllers\CofluenceController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::prefix('homolog')->group(function () {
//     Route::post('webhook', [HomologWebhook::class, 'handle']);
// });

Route::prefix('homolog')->group(function () {
    Route::post('webhook', [CofluenceController::class, 'handle']);
});
