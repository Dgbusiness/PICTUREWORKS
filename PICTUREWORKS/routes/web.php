<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'getUserById'])->name('index');

Route::get('user/{id}', [UserController::class, 'getUserById'])->name('user.show');
Route::post('user', [UserController::class, 'appendCommentsById'])->name('user.update');
