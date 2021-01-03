<?php

use App\Http\Controllers\Controller1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\Blade2Controller;
use App\Http\Controllers\SubmitController;

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
    return redirect('/routing');
});

Route::view('/view', 'beginner-laravel.5-tanpa-controller');
Route::view('/routing', 'beginner-laravel.6-ini-routing');
Route::get('/controller/{user}', [Controller1::class, 'index']);
Route::view('/component', 'beginner-laravel.8-ini-component');
Route::get('/blade', [BladeController::class, 'index']);
Route::get('/blade2', [Blade2Controller::class, 'index']);
Route::post('/submit', [SubmitController::class, 'store']);
Route::get('/view-submit', [SubmitController::class, 'create']);
