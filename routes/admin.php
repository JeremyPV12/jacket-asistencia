<?php

use App\Http\Controllers\Admin\AsistenciaController;
use App\Http\Controllers\Admin\EmpleadoController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('',[HomeController::class,'index'])->name('admin.home');

Route::resource('users', UserController::class);
Route::resource('asistencias', AsistenciaController::class);
Route::resource('empleados', EmpleadoController::class);