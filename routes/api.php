<?php

use App\Http\Api\User\Actions\CreateUserAction;
use App\Http\Api\User\Actions\LoginAction;
use Illuminate\Support\Facades\Route;


Route::prefix('/user')->group(function () {
    Route::post('/create', CreateUserAction::class);
    Route::post('/login', LoginAction::class);
});
