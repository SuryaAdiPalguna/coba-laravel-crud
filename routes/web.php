<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [ReadController::class, 'index']);

Route::get('/create', [CreateController::class, 'index']);
Route::post('/create', [CreateController::class, 'store']);

Route::get('/read', [ReadController::class, 'index']);

Route::get('/update/{data}', [UpdateController::class, 'index']);
Route::put('/update/{data}', [UpdateController::class, 'update']);

Route::delete('/delete/{data}', [DeleteController::class, 'index']);
