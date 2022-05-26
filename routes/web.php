<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\SuperController;

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
})->name('welcome');

Route::get('/accueil', [AccueilController::class, 'index']);
Route::get('/superuser', [SuperController::class, 'show'])->name('showuser');
Route::get('/edituser/{id}', [SuperController::class, 'edit'])->name('edituser');
Route::post('/edituser/{id}', [SuperController::class, 'update'])->name('update');
Route::get('/deleteuser/{id}', [SuperController::class, 'delete'])->name('deleteuser');
Route::post('/updateuser/{id}', [SuperController::class, 'update'])->name('updateuser');
Route::get('/accueil/{id}', [AuthenticatedSessionController::class, 'showaccueil'])->name('accueil');

Route::post('/accueil', function () {
    return view('accueil');
})->name('pgaccueil');


require __DIR__.'/auth.php';
