<?php

use App\Http\Controllers\HotelsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('hotels/rooms/{id}', [HotelsController::class, 'rooms'])->name('hotel.rooms');
Route::get('hotels/room-details/{id}', [HotelsController::class, 'rooms_details'])->name('hotel.rooms.details');

