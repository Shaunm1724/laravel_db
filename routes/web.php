<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

Route::controller(NotesController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::view('/new-note', 'create')->name('add-note-route');
    Route::post('/add-note', 'addNote')->name('add-note');
    Route::get('/remove-note/{id}', 'removeNote')->name('delete-note');
    Route::get('update-note/{id}', 'updateRoute')->name('update-route');
    Route::put('update-note/{id}', 'updateNote')->name('update-note');
});