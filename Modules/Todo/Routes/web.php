<?php

use Illuminate\Support\Facades\Route;
use Modules\Todo\Controllers\TodoController;

Route::group(['namespace' => 'Modules\Todo\Controllers', 'prefix' => 'todo'], function() {
    Route::get('/', [TodoController::class, 'index']);
    Route::post('/create', [TodoController::class, 'create']);
    Route::post('/update/{id}', [TodoController::class, 'update']);
    Route::delete('/delete/{id}', [TodoController::class, 'delete']);
});
