<?php

use App\Http\Controllers\PollTypeController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/poll-types')->name('poll-types.')->group(function () {

    Route::get('/', [PollTypeController::class, 'index'])->name('index');
    Route::get('/create', [PollTypeController::class, 'create'])->name('create');
    Route::post('/store', [PollTypeController::class, 'store'])->name('store');

    });
