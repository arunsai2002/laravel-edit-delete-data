<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});




Route::get('login',[StudentController::class,'index']);
Route::post('login',[StudentController::class,'store']);
Route::get('login',[StudentController::class,'dboperations']);
