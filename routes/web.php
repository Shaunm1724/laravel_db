<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

Route::get('/', [NotesController::class, 'index'])->name('index');

Route::post('/new-note', [NotesController::class, 'addNote'])->name('add-note');

Route::delete('/remove-note/{id}', [NotesController::class, 'removeNote'])->name('delete-note');

Route::put('update-note', [NotesController::class, 'updateRoute'])->name('update-note');
