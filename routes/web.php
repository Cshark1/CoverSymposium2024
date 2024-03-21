<?php

use App\Models\Schedule;
use App\Models\Speaker;
use App\Models\Sponsor;
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
    return Redirect::to('/index');
});

Route::get('/index', function () {
    return View::make('index', ['schedule' => Schedule::getSchedule()]);
});

Route::get('/speakers', function () {
    return View::make('speakers', ['speakers' => Speaker::all()]);
});

Route::get('/sponsors', function () {
    return View::make('sponsors');
});

Route::get('terms', function () {
    return response()->file(public_path('T_C_SYMPOSIUM_2024.pdf'));
});
