<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\TagController;

Route::get('/user/{name}/{surname}', [UserController::class, 'all']);
Route::get('/blade/{text}', [BladeController::class, 'allblade']);
Route::get('/tag/{text}', [TagController::class, 'alltag']);