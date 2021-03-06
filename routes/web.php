<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DashboardController;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [
    DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/application/authentication', [
    ApplicationController::class, 'auth_index'])->name('authentication.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/application/equivalency', [
    ApplicationController::class, 'equi_index'])->name('equivalency.index');

Route::middleware(['auth:sanctum', 'verified'])->post('/application/authentication', [
    ApplicationController::class, 'auth_store'])->name('authentication.store'); 

    Route::middleware(['auth:sanctum', 'verified'])->post('/application/equivalency', [
        ApplicationController::class, 'equi_store'])->name('equivalency.store');     