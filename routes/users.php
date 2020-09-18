<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::group([ 'prefix' => 'users', 'middleware' => 'auth:api' ], function () {
    Route::get('', [UserController::class, 'listUser']);
});
