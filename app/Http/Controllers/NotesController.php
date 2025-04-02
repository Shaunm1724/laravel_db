<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Note;

class NotesController extends Controller
{
    
    public function index () {
        $notes = Note::all();


        return view('index', ['notes' => $notes,]);
    }

    public function addNote (Request $request) {

        // getting user data
        $data = $request->validate([
            'title' => 'required',
            'content' => 'nullable'
        ]);

        // creating a new note in table
        $note = Note::create($data);

        // redirecting to index to show change
        return redirect(route('index'));
    }

    public function removeNote ($id) {

        // fetching note with id
        $note = Note::find($id);

        // deleting that note
        $note->delete();

        // redirecting to index to show change
        return redirect(route('index'));
    }

    public function updateRoute ($id, Request $request) {
        
        // fetching note with id
        $note = Note::find($id);

        // storing current note data
        $title = $note->title;
        $content = $note->content;
        
        // going to update page with current note data
        return view('update', ['id' => $id, 'title' => $title, 'content' => $content,]);
    }

    public function updateNote ($id, Request $request) {

        // getting user data
        $data = $request->validate([
            'title' => 'required',
            'content' => 'nullable'
        ]);
        
        // fetching note with id
        $note = Note::find($id);
        
        // updating note in table
        $note->update($data);

        // redirecting to index
        return redirect(route('index'));
    }
}
