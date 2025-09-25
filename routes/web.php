<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DevController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/page2', [PageController::class, 'page2'])->name('page2');
Route::get('/example-meta', [PageController::class, 'exampleMeta'])->name('example-meta');

// Development routes
Route::get('/api/check-changes', [DevController::class, 'checkChanges'])->name('dev.check-changes');
