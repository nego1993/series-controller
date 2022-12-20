<?php

use App\Http\Controllers\Series_controller;
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

Route::get('/series', [Series_controller::class, 'index'] );
Route::get('/series/criar', [Series_controller::class, 'create'] );
Route::post('/series/criar', [Series_controller::class, 'create'] );
