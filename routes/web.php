<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

Route::get('/', [NotesController::class, 'index'])->name('index');

Route::post('/new-note', [NotesController::class, 'addNote'])->name('add-note');
