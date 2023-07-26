<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        echo 'dashboard';
    });
    Route::prefix('profile')->group(function () {

        Route::get('edit', function () {
            echo ' Edit profile';
        });
        Route::get('update', function () {
            echo ' update profile';
        });
    });
});


require __DIR__ . '/auth.php';
