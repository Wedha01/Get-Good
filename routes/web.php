<?php

use App\Http\Controllers\AdminMessageController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Models\Karakters;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $characters = Karakters::all();
    $events = Event::all(); // Fetch events here
    return view('dashboard', ['c' => $characters, 'e' => $events]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Character Routes
    Route::get('/characters', [CharacterController::class, 'index'])->name('characters.index');
    Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');
    Route::get('/characters/page', [CharacterController::class, 'page'])->name('characters.page');
    Route::post('/characters', [CharacterController::class, 'store'])->name('characters.store');
    Route::get('/characters/{character}/edit', [CharacterController::class, 'edit'])->name('characters.edit');
    Route::put('/characters/{character}', [CharacterController::class, 'update'])->name('characters.update');
    Route::delete('/characters/{character}', [CharacterController::class, 'destroy'])->name('characters.destroy');

    // Event Routes
    Route::get('/characters', [eventController::class, 'index'])->name('characters.index');
    Route::get('/events/create', [eventController::class, 'create'])->name('events.create');
    Route::post('/events', [eventController::class, 'store'])->name('events.store');
    Route::get('/events/{event}/edit', [eventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{event}', [eventController::class, 'update'])->name('events.update');
    Route::delete('/events/{event}', [eventController::class, 'destroy'])->name('events.destroy');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';