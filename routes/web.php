<?php

use App\Http\Middleware\CheckStatus;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormationController;

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

Route::get('/', [HomeController::class,'index'])-> name ('/');

// Pages user
Route::get('/home', [FormationController::class,'index'])-> name ('home')->middleware('auth');
Route::get('/show', [FormationController::class,'show'])-> name ('show')->middleware('auth');
Route::get('/formation/{id}', [FormationController::class,'show'])-> name ('FormationController.show')->middleware('auth');

// Pages admin
Route::middleware([CheckStatus::class])->group(function(){
    Route::get('/dashboard', [HomeController::class,'dashboard'])->middleware('auth')->name('dashboard');
});



