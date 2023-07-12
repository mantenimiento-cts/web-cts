<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrador\RequerimentsController;
use App\Http\Controllers\Administrador\ClientsController;
use App\Http\Controllers\Administrador\TicketsController;
use App\Http\Controllers\Administrador\CurriculumsController;
use App\Http\Controllers\Administrador\EquipmentsController;
use App\Http\Controllers\Administrador\UsersController;
use App\Http\Controllers\Administrador\StatusController;

//routes para requeriments y middleware para proteger las vistas
Route::middleware(['role:administrador','auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
Route::resource('requeriments',RequerimentsController::class); 
Route::resource('clients', ClientsController::class);
Route::resource('tickets', TicketsController::class);
Route::resource('curriculums', CurriculumsController::class);
Route::resource('equipments', EquipmentsController::class);
Route::resource('users', UsersController::class);
Route::resource('status', StatusController::class);
});