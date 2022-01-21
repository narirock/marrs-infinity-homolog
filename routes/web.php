<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\StrategyController;
use App\Http\Controllers\SignalTypesController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\ValidationTimeController;
use App\Http\Controllers\Reports\RequestController;

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
        Route::resource('strategies', StrategyController::class, ['as' => 'admin']);
        Route::resource('signaltypes', SignalTypesController::class, ['as' => 'admin']);

        Route::get('configurations', [ConfigurationController::class, 'index'])->name('admin.configurations.index');
        Route::post('configurations', [ConfigurationController::class, 'store'])->name('admin.configurations.store');
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
