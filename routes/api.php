<?php

use App\Http\Controllers\API\SandwichController;
use App\Models\Sandwich;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource("/sandwiches", SandwichController::class);

