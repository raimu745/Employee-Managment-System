<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\EmployeeController::class, 'index'])->name('home');
Route::get('user',[UserController::class,'userView']);
Route::get('userForm',[UserController::class,'userForm']);
Route::post('store',[UserController::class,'store']);
Route::get('edit/{id}',[UserController::class,'edit']);
Route::post('update/{id}',[UserController::class,'update']);
Route::get('delete/{id}',[UserController::class,'destroy']);

Route::post('passUpdate',[UserController::class,'passUpdate']);
Route::resource('countries', CountryController::class);
