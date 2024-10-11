<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WelcomeController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [ProjectsController::class, 'show'])->name('projects.show');
