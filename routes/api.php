<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskmanagerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('welcome',[WelcomeController::class,'welcome']);
Route::get('index',[WelcomeController::class , 'index']);
Route::get('about',[WelcomeController::class,'about']);
Route::get('user',[UserController::class, 'index']);
Route::get('user/{id}',[UserController::class, 'show']);

//  Taskmanager routes
// Route::get('tasks/index',[TaskmanagerController::class, 'index']); // show all tasks form  tasks manager  
// Route::post('tasks/store',[TaskmanagerController::class, 'store']);// add tasks to taskmanagers
// Route::get('tasks/show/{id}',[TaskmanagerController::class,'show']);// show id tasks  form tasks
// Route::put('tasks/{id}',[TaskmanagerController::class, 'update']);
// Route::delete('tasks/{id}',[TaskmanagerController::class, 'destroy']);


// Taskmanager  routes api resources
// php artisan make:controller TaskmanagerController --api
Route::apiResource('tasks',TaskmanagerController::class);


// profile routes api resources
// php markup make:controller ProfileController --api
Route::apiResource('profiles',ProfileController::class);
 // get profile from user 
Route::get('getprofile/{id}',[UserController::class,'getProfile']);
 // get user from profile 
Route::get('getuser/{id}',[ProfileController::class, 'getUser']);
