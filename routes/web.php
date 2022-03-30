<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::middleware("auth")->group(function(){
    Route::get("/new-car",[CarController::class,"create"]);
    Route::get("/edit-car/{id}",[CarController::class,"edit"]);
    Route::get("/delete-car/{id}",[CarController::class,"delete"]);
});

Route::get('/',[CarController::class,"index"]);
Route::post("/store-car",[CarController::class,"store"]);
Route::put("/update-car",[CarController::class,"update"]);
Route::get("/logout",[AuthenticatedSessionController::class,"destroy"]);
Route::get("/search-car",[CarController::class,"search"]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';