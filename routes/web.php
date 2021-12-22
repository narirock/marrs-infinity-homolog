<?php

use App\Http\Controllers\Reports\RequestController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'reports'], function () {
    Route::group(['prefix' => 'request'], function () {
        Route::get('/', [RequestController::class, 'index'])->name('reports.request.index');
    });
});
