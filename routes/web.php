<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/homepage',[HomeController::class , 'home']);
Route::get('/shop',[HomeController::class , 'shop']);

Route::get('/login',[LoginController::class , 'login']);
Route::post('/register',[LoginController::class , 'store']);
Route::post('/logged',[LoginController::class , 'logged']);

Route::get('/checkout',[HomeController::class , 'checkout']);
Route::get('/laptop',[HomeController::class , 'laptop']);
Route::get('/mobile',[HomeController::class , 'mobile']);
Route::get('/camera',[HomeController::class , 'camera']);

Route::get('/tablet',[HomeController::class , 'tablet']);
Route::get('/details',[HomeController::class , 'details']);
Route::get('/cart',[HomeController::class , 'cart']);


