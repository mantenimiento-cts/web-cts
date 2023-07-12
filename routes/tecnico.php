<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tecnico\RequerimentsController;
Route::middleware(['role:tecnico','auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
Route::resource('requerimentoos', RequerimentsController::class);
});
