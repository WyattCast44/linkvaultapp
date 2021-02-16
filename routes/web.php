<?php

use App\Http\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('welcome');

// Dashboard
Route::get('/dashboard', Dashboard::class)->name('dashboard')->middleware('auth');
