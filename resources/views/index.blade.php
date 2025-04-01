<h1>The are the notes</h1>

@foreach ($notes as $note)
    <p>{{ $note->title }}</p>
@endforeach