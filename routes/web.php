<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GeniusApiController;
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
Route::get('/search/{query} ' , [GeniusApiController::class , 'searchData'] );
Route::get('/', [PagesController::class , 'home']);
Route::get('/about', [PagesController::class , 'about']);
Route::get('/user/{id}/{name}', [PagesController::class , 'name']);

