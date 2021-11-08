<?php

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

Route::get('/', [App\Http\Controllers\PageController::class, 'Home']);
Route::get('/contact', [App\Http\Controllers\PageController::class, 'Contact']);
Route::get('/about-us', [App\Http\Controllers\PageController::class, 'AboutUs']);
Route::get('/services', [App\Http\Controllers\PageController::class, 'Services']);
Route::get('/projects', [App\Http\Controllers\PageController::class, 'Projects']);
Route::get('/services/manufacturing', [App\Http\Controllers\PageController::class, 'Manufacturing']);
Route::get('/services/installation', [App\Http\Controllers\PageController::class, 'Installation']);
Route::get('/services/pressure-vessel-inspection', [App\Http\Controllers\PageController::class, 'PVI']);
Route::get('/products/frs-rack-3', [App\Http\Controllers\PageController::class, 'FrsRack3']);
Route::get('/products/firesi-modul', [App\Http\Controllers\PageController::class, 'FiresiModul']);
Route::get('/products/valves-frs-h', [App\Http\Controllers\PageController::class, 'ValvesFRSH']);
Route::get('/why-firesi', [App\Http\Controllers\PageController::class, 'WhyFiresi']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
