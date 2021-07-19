<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UiController;
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

Route::get('/index',[IndexController::class,'index']);
Route::get('/list', [ListController::class, 'listTables']);
Route::get('/form', [FormController::class, 'form']);
Route::get('/calendar',[CalendarController::class, 'calendar']);
Route::get('/ui', [UiController::class, 'ui']);
Route::get('/product', [ProductsController::class, 'listProduct']);
Route::get('/event', [EventsController::class, 'eventController']);
Route::post('/event', [EventsController::class, 'store']);
