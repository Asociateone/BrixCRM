<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Subscription;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::apiResource('/persons', PersonController::class)->names('persons');
Route::prefix('/persons')->group(function () {
    Route::apiResource('/subsciptions', SubscriptionController::class)->names('subsciptions');
});


