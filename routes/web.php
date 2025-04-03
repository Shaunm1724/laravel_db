<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

// Route::get('/', [NotesController::class, 'index'])->name('index');

// Route::post('/new-note', [NotesController::class, 'addNote'])->name('add-note');

// Route::get('/remove-note/{id}', [NotesController::class, 'removeNote'])->name('delete-note');

// Route::get('update-note/{id}', [NotesController::class, 'updateRoute'])->name('update-route');

// Route::put('update-note/{id}', [NotesController::class, 'updateNote'])->name('update-note');

Route::controller(NotesController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/new-note', 'addNoteRoute')->name('add-note-route');
    Route::post('/new-note', 'addNote')->name('add-note');
    Route::get('/remove-note/{id}', 'removeNote')->name('delete-note');
    Route::get('update-note/{id}', 'updateRoute')->name('update-route');
    Route::put('update-note/{id}', 'updateNote')->name('update-note');
});