<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstEIController;
use App\Http\Controllers\InvokableEiController;
use App\Http\Controllers\ResourceEiController;
use App\Http\Controllers\APIEiController;
use App\Http\Controllers\MiddlewareEiController;

// Normal Controller
Route::get('firsteicontroller',[FirstEIController::class,'display']);

// Invokable Controller
Route::get('/xyz/{id}', InvokableEiController::class);

// Resource Controller
Route::resource('resourceei', ResourceEiController::class);

// API Controller
Route::apiResource('apiei', APIEiController::class);

// Middleware Route
// 1 create controller MiddlewareEiController
// 2 return anything inside the display function 
// 3 open web.php -import created controller and give route to the controller
// 4create middleware syntax with php artsan make: middleware Eimddleware
// 5 in middleware , set contraint in the function
// 6 open app.php nof bootstrap foleder, there you have to register for middleware
// 7  add middleware route in controller
// 8 run your url

Route::get('/middleware-test', [MiddlewareEiController::class, 'display'])
        ->middleware('checkage');