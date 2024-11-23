<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\VehiculeController;





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



Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::get('/index', [AuthController::class, 'index'])->name('index.users');
Route::get('/delete/{user}', [AuthController::class, 'delete'])->name('delete.users');
Route::get('/edit/{user}',[AuthController::class, 'edit'])->name('user.edit');
Route::get('/update/{user}',[AuthController::class, 'update'])->name('user.update');



Route::group(['middleware'=>'auth'], function(){


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::prefix('familles')->group(function(){
        Route::get('/',[FamilleController::class, 'index'])->name('familles.index');
        Route::get('/create',[FamilleController::class, 'create'])->name('familles.create');
        Route::get('/',[FamilleController::class, 'index'])->name('familles.index');
        Route::post('/create',[FamilleController::class, 'store'])->name('familles.store');
        Route::get('/delete/{famille}',[FamilleController::class, 'delete'])->name('familles.delete');
        Route::get('/edit/{famille}',[FamilleController::class, 'edit'])->name('familles.edit');
        Route::get('/update/{famille}',[FamilleController::class, 'update'])->name('familles.update');


    });

    Route::prefix('vehicule')->group(function(){
        Route::get('/',[VehiculeController::class, 'index'])->name('vehicule.index');
        Route::get('/create',[VehiculeController::class, 'create'])->name('vehicule.create');
        Route::get('/',[VehiculeController::class, 'index'])->name('vehicule.index');
        Route::post('/create',[VehiculeController::class, 'store'])->name('vehicule.store');
        Route::get('/delete/{vehicule}',[VehiculeController::class, 'delete'])->name('vehicule.delete');
        Route::get('/edit/{vehicule}',[VehiculeController::class, 'edit'])->name('vehicule.edit');
        Route::get('/update/{vehicule}',[VehiculeController::class, 'update'])->name('vehicule.update');


    });


});

