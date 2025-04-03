<h3>These are the notes</h3>

@foreach ($notes as $note)
    <div>
        <p>
            {{ $note->title }}: {{ $note->content }}
            <a href="{{ route('delete-note', [
                'id' => $note->id,
            ]) }}">Delete</a>
            <a href="{{ route('update-route', [
                'id' => $note->id,
            ]) }}">Edit</a>
        </p>
    </div>
@endforeach

<h3><a href="{{ route('add-note-route') }}">Create Note</a></h3>
