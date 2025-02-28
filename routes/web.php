<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
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


Route::middleware('guest')->group(function () {
    // LOGIN
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/auth', [LoginController::class, 'auth'])->name('auth');

    // REGISTER
    Route::get('/register', [RegisterController::class, 'register'])->name('register.form');
    Route::post('/register', [RegisterController::class, 'register_user'])->name('register.user');
});



Route::group(['middleware' => 'auth'], function () {
    // DASHBOARD
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    // TASK ROUTES
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.list');
    Route::get('/tasks-create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/tasks-store', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/tasks-edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::patch('/tasks-edit/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/tasks', [TaskController::class, 'destroy'])->name('tasks.delete');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');


    // LOGOUT
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
