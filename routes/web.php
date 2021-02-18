<?php

use App\Domain\Support\Scrapers\Embed;
use App\Http\Livewire\TagShow;
use App\Http\Livewire\TagIndex;
use App\Http\Livewire\LinkShow;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\LinkIndex;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('welcome')->middleware('guest');

Route::prefix('dashboard')->group(function () {
    // Dashboard
    Route::get('/', Dashboard::class)->name('dashboard')->middleware('auth');

    // Tags
    Route::get('/tags', TagIndex::class)->name('dashboard.tags.index')->middleware('auth');
    Route::get('/tags/{tag}', TagShow::class)->name('dashboard.tags.show')->middleware('auth');

    // Links
    Route::get('/links', LinkIndex::class)->name('dashboard.links.index')->middleware('auth');
    Route::get('/links/{link}', LinkShow::class)->name('dashboard.links.show')->middleware('auth');
});

Route::get('/test', function () {
    $commands = config('command-palette');
    return app()->make($commands['logout']['handler'])->handle();
});

/**
 * logout -> expect to logout and redirect
 * tag:laravel -> expect to go to laravel tag page
 * make:tag laravel -> expect to create a tag called laravel and then redirect?
 * make:link https://url -> expect to create a link and then redirect?
 * search:domain laravel.com
 */
