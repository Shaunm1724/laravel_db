<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

Route::get('/', [NotesController::class, 'index']);
