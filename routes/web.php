<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\LoginController;

Route::controller(NotesController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::view('/new-note', 'create')->name('add-note-route');
    Route::post('/add-note', 'addNote')->name('add-note');
    Route::get('/remove-note/{id}', 'removeNote')->name('delete-note');
    Route::get('update-note/{id}', 'updateRoute')->name('update-route');
    Route::put('update-note/{id}', 'updateNote')->name('update-note');
});


Route::controller(LoginController::class)->group(function () {
    Route::view('/login', 'login')->name('login-page');
    Route::post('/login', 'authenticate')->name('login');
    Route::post('/register', 'registerUser')->name('register');
    Route::view('/register', 'register')->name('register-page');
    Route::get('/logout', 'logout')->name('logout');
});