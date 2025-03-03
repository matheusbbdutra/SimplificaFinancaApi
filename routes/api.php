<?php

use App\Http\Api\Finance\Actions\Account\CreateAccountAction;
use App\Http\Api\User\Actions\CreateUserAction;
use App\Http\Api\User\Actions\LoginAction;
use App\Http\Api\User\Actions\UpdateUserAction;
use Illuminate\Support\Facades\Route;


Route::prefix('/user')->group(function () {
    Route::post('/create', CreateUserAction::class);
    Route::post('/login', LoginAction::class);

    Route::middleware('auth:api')->group(function () {
        Route::post('/update', UpdateUserAction::class);
    });

});

Route::prefix('/finance')->group(function () {
    Route::middleware('auth:api')->group(function () {

        Route::prefix('/account')->group(function () {
            Route::post('/create', CreateAccountAction::class);
        });

        Route::prefix('/transaction')->group(function () {

        });

        Route::prefix('/category')->group(function () {

        });

        Route::prefix('/card')->group(function () {

        });
    });
});
