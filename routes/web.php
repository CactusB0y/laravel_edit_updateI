<?php

use App\Http\Controllers\PetController;
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

Route::get('/', [PetController::class, 'index']);
Route::get('/create', [PetController::class, 'create']);
Route::post('/pet-store',[PetController::class, 'store']);
Route::get('/pet-show/{id}',[PetController::class, 'show']);
Route::post('/pet-delete/{id}', [PetController::class, 'destroy']);
Route::get('/pet-edit/{id}', [PetController::class, 'edit']);
Route::post('/pet-update/{id}', [PetController::class, 'update']);
