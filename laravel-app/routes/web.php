<?php

use App\Http\Controllers\EventController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'pages.index')->name('index');

Route::get('/events', [EventController::class , 'index'])->name('events');

Route::get('/events/create', [EventController::class , 'create'])->name('create');

Route::post('/store', [EventController::class, 'store'])->name('store');

Route::get('/events/{id}', [EventController::class , 'show'])->name('show');

Route::get('/events/{id}/edit', [EventController::class , 'edit'])->name('edit');

Route::put('/events/{id}/update', [EventController::class , 'update'])->name('update');
//Delete Event
Route::delete('/events/{id}/delete', [EventController::class , 'destroy'])->name('delete');
