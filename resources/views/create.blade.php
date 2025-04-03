<h3>Create Note</h3>

<form action="{{ route('add-note') }}" method="POST">
    @csrf
    @method('POST')
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