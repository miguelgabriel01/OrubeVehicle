<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);
Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/home', HomeController::class);

//Rota responsavel por cadastrar o veiculo
Route::resource('/vehicles', VehicleController::class)->middleware('auth');