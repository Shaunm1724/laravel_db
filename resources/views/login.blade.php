<form action="{{ route('login') }}" method="POST">
    @csrf
    @method('POST')
    <div>
    <label>Email</label>
    <input type="text" name="email" required="true">
    </div>
    <div>
    <label>Password</label>
    <input type="text" name="password" required="true">
    </div>
    <button type="submit">Login</button>
</form>

<p>Not a user? <a href="{{ route('register-page') }}">Register</a></p>