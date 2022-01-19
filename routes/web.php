<?php

use App\Http\Controllers\CoinController;
use App\Http\Controllers\Reports\RequestController;
use App\Http\Controllers\ValidationTimeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    ['prefix' => 'admin', 'middleware' => ['admin']],
    function () {
        Route::resource('coins', CoinController::class, ['as' => 'admin']);
        Route::resource('validationtimes', ValidationTimeController::class, ['as' => 'admin']);
    }
);

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'reports'], function () {
    Route::group(['prefix' => 'request'], function () {
        Route::get('/', [RequestController::class, 'index'])->name('reports.request.index');
    });
});
