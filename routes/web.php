<?php

use App\Domain\Support\Scrapers\Embed;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('welcome');

// Dashboard
Route::get('/dashboard', function (Embed $client) {
    return view('dashboard');
})->name('dashboard')->middleware('auth');
