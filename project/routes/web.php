<?php

use App\Http\Controllers\HomePageControlller;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageControlller::class, 'index']);
Route::post('/submit_form', [HomePageControlller::class, 'submit_form'])->name('submit_form');

