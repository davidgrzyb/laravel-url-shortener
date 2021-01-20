<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectToUrl;
use App\Http\Controllers\LinkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/login');

Route::middleware(['auth'])->group(function () {
    Route::get('/links', [LinkController::class, 'index'])
        ->name('links');

    Route::get('/links/create', [LinkController::class, 'create'])
        ->name('links.create');

    Route::get('/links/{link}/edit', [LinkController::class, 'edit'])
        ->name('links.edit');
});

require __DIR__.'/auth.php';

Route::get('{link:slug}', RedirectToUrl::class)->name('redirect');
