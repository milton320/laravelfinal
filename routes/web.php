<?php

use App\Http\Controllers\ExternosController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\UserController;
use Faker\Provider\Person;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/usuarios',UserController::class);

//RUTA DE PERSONAL
Route::resource('/personal', PersonalController::class);

//RUTA DE EXTEERNOS
Route::resource('/externo', ExternosController::class);
//  Route::get('/externo', [ExternosController::class, 'PersonalCombox']);
