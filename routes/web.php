<?php

use App\Http\Controllers\ChambreController;
use App\Http\Controllers\EmployersController;
use App\Http\Controllers\InternauteController;
use App\Models\Internaute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\ProfileController ;

use App\Http\Controllers\InformationController ;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\VoitureController;
use App\Models\Reservation;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('reservations.index');
});

Route::resource('internautes',InternauteController::class);
Route::resource('chambres',ChambreController::class);
Route::resource('reservations',ReservationController::class);