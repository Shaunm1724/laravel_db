<h3>These are the notes</h3>

@foreach ($notes as $note)
    <div>
        <p>{{ $note->title }}: {{ $note->content }}</p>
    </div>
@endforeach

<h3>Create Note</h3>

<form action="{{ route('add-note') }}" method="POST">
    @csrf

    <div>
        <label>Title</label>
        <input type="text" name="title" required="true">
    </div>
    <div>
        <label>Content</label>
        <input type="text" name="content">
    </div>
    <button type="submit">Submit</button>
</form>

<h3>Update Note</h3>


<form action="{{ route('update-note') }}", method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Id</label>
        <input type="text", name="id", required="true">
    </div>
    <div>
        <label>Title</label>
        <input type="text" name="title" required="true">
    </div>
    <div>
        <label>Content</label>
        <input type="text" name="content">
    </div>
    <button type="submit">Update</button>

</form>