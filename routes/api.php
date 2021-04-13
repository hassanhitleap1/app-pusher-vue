<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('questions', App\Http\Controllers\QuestionController::class);
Route::apiResource('categories', App\Http\Controllers\CategoryController::class);
Route::apiResource('questions/{question}/reply', App\Http\Controllers\ReplyController::class);

Route::post('like/{reply}', App\Http\Controllers\LikesController::class ,'like');
Route::delete('like/{reply}', App\Http\Controllers\LikesController::class ,'unLikeit');
