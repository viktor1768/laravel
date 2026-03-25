<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ArrController;
use App\Http\Controllers\DumpController;
use App\Http\Controllers\ColController;
use App\Http\Controllers\ModelController;

Route::get('/user/{name}/{surname}', [UserController::class, 'all']);

Route::get('/blade/{text}', [BladeController::class, 'allblade']);

Route::get('/tag/{text}', [TagController::class, 'alltag']);

Route::get('/arr', [ArrController::class, 'allarr']);

Route::get('/dump', [DumpController::class, 'dumparr']);

Route::get('/collection', [ColController::class, 'index']);

Route::get('/model', [ModelController::class, 'index'])->where(['id'=>'[0-9]+']);
