<h1>user login form</h1>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" required />
    <br><br>
    <input type="password" name="password" required />
    <br><br>
    <button type="submit">Login</button>
</form>