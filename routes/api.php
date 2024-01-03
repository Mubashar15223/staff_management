<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\ThemeApiController;

// Authenticated routes using Passport middleware
Route::middleware('auth:api')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('servers', function(){
        $servers = [

           [
             'id'=> 1,
            'name'=> 'Server M'
           ],
           [
            'id'=> 2,
           'name'=> 'Server N'
           ]
        ];
        return ['status'=> 'true', 'data'=> $servers];
    });


});
Route::get('theme',[ThemeApiController::class, 'index']);

// Unauthenticated routes
Route::middleware('api')->prefix('user')->group(function () {
    Route::post('login', [AuthApiController::class, 'login']);
    Route::post('register', [AuthApiController::class, 'register']);
    // Add other routes as needed
});

