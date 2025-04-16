<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\LoginController;

Route::middleware('auth')->group(function () {
    Route::controller(NotesController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::view('/new-note', 'create')->name('add-note-route');
        Route::post('/add-note', 'addNote')->name('add-note');
        Route::post('/remove-note/{id}', 'removeNote')->name('delete-note');
        Route::post('update-note/{id}', 'updateRoute')->name('update-route');
        Route::put('update-note/{id}', 'updateNote')->name('update-note');
        Route::get('search-note', 'searchNote')->name('search-note');
    });
});


Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'loginPage')->name('login-page');
    Route::post('/login', 'authenticate')->name('login');
    Route::post('/register', 'registerUser')->name('register');
    Route::get('/register', 'registerPage')->name('register-page');
    Route::post('/logout', 'logout')->name('logout');
});