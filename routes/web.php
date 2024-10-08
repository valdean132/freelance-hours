<?php

use App\Http\Controllers\WelcomeController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class);
Route::get('/counter', Counter::class);
