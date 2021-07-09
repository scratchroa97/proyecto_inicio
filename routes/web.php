<?php

use App\Http\Controllers\BatteryController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\RamMemoryController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('battery', BatteryController::class);
    Route::resource('phone', PhoneController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('ram', RamMemoryController::class);
    Route::resource('color', ColorController::class);
    Route::resource('gender', GenderController::class);
});