<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes (Separated Router File)
|--------------------------------------------------------------------------
| All application routes are defined here in a dedicated file,
| cleanly mapping incoming request URLs to PageController methods.
|
*/

// Welcome Page (Landing page with "Enter Website" button)
Route::get('/', [PageController::class, 'welcome'])->name('welcome');

// Page 1: Home / Portfolio (Dynamic Variables)
Route::get('/home', [PageController::class, 'home'])->name('home');

// Page 2: About Me (While Loop Iteration)
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/data-diri', [PageController::class, 'about']); // Backwards-compatible alias

// Page 3: Photo Gallery (Local Images)
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/galeri', [PageController::class, 'gallery']); // Backwards-compatible alias
