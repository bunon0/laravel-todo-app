<?php

use App\Http\Controllers\GoalController;
use App\Models\Goal;
use Illuminate\Support\Facades\Auth;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/', [GoalController::class, 'index'])->middleware('auth');
Route::resource('/goals', GoalController::class)
    ->only(['index', 'store', 'update', 'destroy'])
    ->middleware('auth');
