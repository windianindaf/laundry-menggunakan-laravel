<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// web.php




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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\usercontroller::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\usercontroller::class, 'create']);
Route::post('/users', [App\Http\Controllers\usercontroller::class, 'store']);
Route::get('/users/edit/{id}', [App\Http\Controllers\usercontroller::class, 'edit']);
Route::patch('/users/{id}', [App\Http\Controllers\usercontroller::class, 'update']);
Route::delete('/users/{id}', [App\Http\Controllers\usercontroller::class, 'destroy']);
Route::get('/pemesanan', [App\Http\Controllers\pemesanancontroller::class, 'index']);
Route::get('/pemesanan/create', [App\Http\Controllers\pemesanancontroller::class, 'create']);
Route::post('/pemesanan', [App\Http\Controllers\pemesanancontroller::class, 'store']);
Route::get('/pemesanan/edit/{id}', [App\Http\Controllers\pemesanancontroller::class, 'edit']);
Route::patch('/pemesanan/{id}', [App\Http\Controllers\pemesanancontroller::class, 'update']);
Route::delete('/pemesanan/{id}', [App\Http\Controllers\pemesanancontroller::class, 'destroy']);
Route::get('/costumer', [App\Http\Controllers\CostumerController::class, 'index']);
Route::get('/costumer/create', [App\Http\Controllers\CostumerController::class, 'create']);
Route::post('/costumer', [App\Http\Controllers\CostumerController::class, 'store']);
Route::get('/costumer/edit/{id}', [App\Http\Controllers\CostumerController::class, 'edit']);
Route::patch('/costumer/{id}', [App\Http\Controllers\CostumerController::class, 'update']);
Route::delete('/costumer/{id}', [App\Http\Controllers\CostumerController::class, 'destroy']);

Route::get('/pembayaran', [App\Http\Controllers\pembayaranController::class, 'index']);
Route::get('/pembayaran/create', [App\Http\Controllers\pembayaranController::class, 'create']);
Route::post('/pembayaran', [App\Http\Controllers\pembayaranController::class, 'store']);
Route::get('/pembayaran/edit/{id}', [App\Http\Controllers\pembayaranController::class, 'edit']);
Route::patch('/pembayaran/{id}', [App\Http\Controllers\pembayaranController::class, 'update']);
Route::delete('/pembayaran/{id}', [App\Http\Controllers\pembayaranController::class, 'destroy']);

