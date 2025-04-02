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

        $data = $request->validate([
            'title' => 'required',
            'content' => 'nullable'
        ]);

        // // getting data from input elements
        // $title = $request->input('title');
        // $content = $request->input('content');
        
        // adding new note
        // $note = new Note;
        // $note->title = $title;
        // $note->content = $content;
        // $note->save();

        $note = Note::create($data);


        return redirect(route('index'));
    }

    public function removeNote ($id) {
        $note = Note::find($id);
        $note->delete();

        return redirect(route('index'));
    }

    public function updateRoute ($id, Request $request) {
        
        // getting data from input elements
        // $id = $request->input('id');
        // $title = $request->input('title');
        // $content = $request->input('content');


        $note = Note::find($id);
        $title = $note->title;
        $content = $note->content;
        
        // $note->title = $title;
        // $note->content = $content;
        // $note->save();
        return view('update', ['id' => $id, 'title' => $title, 'content' => $content,]);
    }

    public function updateNote ($id, Request $request) {

        $data = $request->validate([
            'title' => 'required',
            'content' => 'nullable'
        ]);

        $note = Note::find($id);
        // $title = $request->input('title');
        // $content = $request->input('content');

        // $note->title = $title;
        // $note->content = $content;
        // $note->save();
        // if($note->content != $data->content && $data->content == null) {
        //     $data->content = $note->content;
        // }
        $note->update($data);


        return redirect(route('index'));
    }
}
