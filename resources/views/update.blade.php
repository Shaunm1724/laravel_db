<h3>Update Note</h3>

<form action="{{ route('update-note', ['id' => $id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Title</label>
        <input type="text" name="title" required="true" value="{{ $title }}">
    </div>
    <div>
        <label>Content</label>
        <input type="text" name="content" value="{{ $content }}">
    </div>
    <button type="submit">Update</button>
</form>