<?php

use App\Http\Controllers\ScreenController;
use App\Http\Controllers\AccesoryController;
use App\Http\Controllers\BatteryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\GraphicCardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OperatingSystemController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\RamMemoryController;
use App\Http\Controllers\RomMemoryController;
use App\Models\Phone;
use Illuminate\Support\Facades\DB;
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


// Route::get('/', function () {
//     $phones = DB::table('phones')->get(['foto', 'phone_name', 'precio']);
//     return view('welcome', compact('phones'));
// });
//  
// 
Route::view('/', 'welcome', ['phones' => DB::table('phones')->orderBy('precio')->get(['foto', 'phone_name', 'precio'])])->name('/');
Route::view('somos', 'somos')->name('somos');
Route::view('contacto', 'contacto')->name('contacto');
Route::view('celulares', 'celulares', ['phones' =>  DB::table('phones')->orderBy('precio')->get(['foto', 'phone_name', 'precio'])])->name('celulares');
Route::view('accesorios', 'accesorios', ['accesorios' =>  DB::table('accesories')->orderBy('price')->get(['foto', 'name', 'price'])])->name('accesorios');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('accesory', AccesoryController::class);
    Route::resource('battery', BatteryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('color', ColorController::class);
    Route::resource('gender', GenderController::class);
    Route::resource('ram', RamMemoryController::class);
    Route::resource('ram', RamMemoryController::class);
    Route::resource('color', ColorController::class);
    Route::resource('gender', GenderController::class);
    Route::resource('phone', PhoneController::class);
    Route::resource('processor', ProcessorController::class);
    Route::resource('ram', RamMemoryController::class);
    Route::resource('rom', RomMemoryController::class);
    Route::resource('graphicCard', GraphicCardController::class);
    Route::resource('operatingSystem', OperatingSystemController::class);
    Route::resource('screen', ScreenController::class);
});