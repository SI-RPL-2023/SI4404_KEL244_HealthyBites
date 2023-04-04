<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/logreg', [userController::class, "logregview"]);
Route::post('/register', [userController::class, "userRegister"]);
Route::post('/login', [userController::class, "userLogin"]);
Route::get('/', [userController::class, "viewHome"]);