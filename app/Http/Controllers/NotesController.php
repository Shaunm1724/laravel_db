<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Note;

class NotesController extends Controller
{
    
    public function index () {
        $notes = DB::table('notes')->get();


        return view('index', ['notes' => $notes]);
    }

    public function addNote (Request $request) {

        // getting data from input elements
        $title = $request->input('title');
        $content = $request->input('content');
        
        // adding new note
        $note = new Note;
        $note->title = $title;
        $note->content = $content;
        $note->save();
        return redirect('/');
    }
}
