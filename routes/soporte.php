<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Soporte\RequerimentsController;
use App\Http\Controllers\Soporte\ClientsController;
use App\Http\Controllers\Soporte\TicketsController;
use App\Http\Controllers\Soporte\CurriculumsController;
use App\Http\Controllers\Soporte\EquipmentsController;
use App\Http\Controllers\Soporte\UsersController;
Route::middleware(['role:soporte','auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
Route::resource('requerimientos', RequerimentsController::class);
Route::resource('clientes', ClientsController::class);
Route::resource('tickete', TicketsController::class);
Route::resource('curriculum', CurriculumsController::class);
Route::resource('equipos', EquipmentsController::class);
Route::resource('usuarios', UsersController::class);
});