<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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
    Route::get('/my-tasks', [TaskController::class, 'index'])->name('my.tasks');
    Route::get('/create-task', [TaskController::class, 'create'])->name('create.task');
    Route::post('/store-task', [TaskController::class, 'store'])->name('store.task');
    Route::get('/edit-task/{task}', [TaskController::class, 'edit'])->name('edit.task');
    Route::patch('/update-task/{task}', [TaskController::class, 'update'])->name('update.task');
});
