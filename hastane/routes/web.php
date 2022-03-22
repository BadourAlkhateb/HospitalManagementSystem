<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\SurgeriesController;
use App\Http\Controllers\TestsController;



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
    return view('master');
});
Route::get('home', function () {
    return view('home');
});

Route::resource('doctors',DoctorsController::class);

Route::resource('rooms',RoomsController::class);

Route::resource('patients', PatientsController::class);

Route::resource('surgeries', SurgeriesController::class);

Route::resource('tests', TestsController::class);


