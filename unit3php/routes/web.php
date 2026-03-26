<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstEIController;
use App\Http\Controllers\InvokableEiController;
use App\Http\Controllers\ResourceEiController;
use App\Http\Controllers\APIEiController;
use App\Http\Controllers\MiddlewareEiController;
use App\Http\Controllers\GlobalControl;

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
// 4 create middleware using: php artisan make:middleware GlobalEiMiddleware
// 5 in middleware , set constraint in the handle function
// 6 open app.php of bootstrap folder, there you have to register middleware
// 7 add middleware to route using ->middleware('checkage')
// 8 run your url http://127.0.0.1:8000/middleware-test?age=20

Route::get('/middleware-test', [MiddlewareEiController::class, 'display'])
        ->middleware('checkage');

// Create Controller GlobalControl
// Add function inside Controller
// import in web.php
// create route
// creating middleware 
// open middleware add constraint 
// register middleware in app.php
// import middleware in app.php globally
// run url http://127.0.0.1:8000/home?age=19
Route::get('/home', [GlobalControl::class, 'privacy']);



Route::get('login', function () {
    return view('login');
});

Route::get('logout', function () {
    return view('logout');
});