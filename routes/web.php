<?php

use App\Http\Controllers\InicioController;
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
})->name('index');

Route::get('login',[InicioController::class , 'login'])->name('login');
Route::get('register',[InicioController::class , 'register'])->name('register');
Route::post('save',[InicioController::class , 'save'])->name('save');
Route::post('check',[InicioController::class,'check'])->name('check');
Route::get('logout',[InicioController::class , 'logout'])->name('logout');
