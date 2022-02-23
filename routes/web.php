<?php

use App\Http\Controllers\appointmentsController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\DoctorController;
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
// Route::get('/', function(){
//     return view('welcome');
// });

Route::resource('/', appointmentsController::class);
Route::resource('/doctors', DoctorController::class);
Route::resource('/departments', DepartmentsController::class);
