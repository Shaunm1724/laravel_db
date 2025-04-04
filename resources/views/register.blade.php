<form action="{{ route('register') }}" method="POST">
    @csrf
    @method('POST')
    <div>
    <label>Name</label>
    <input type="text" name="name" required="true">
    </div>
    <div>
    <label>Email</label>
    <input type="text" name="email" required="true">
    </div>
    <div>
    <label>Password</label>
    <input type="text" name="password" required="true">
    </div>
    <button type="submit">Register</button>
</form>

<p>Already a user? <a href="{{ route('login-page') }}">Login</a></p>