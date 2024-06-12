<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Token;

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::post('/students', [StudentController::class, 'store'])->withoutMiddleware(['csrf']);
Route::put('/students/{id}', [StudentController::class, 'update'])->withoutMiddleware(['csrf']);
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->withoutMiddleware(['csrf']);
Route::get('/token', [Token::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
