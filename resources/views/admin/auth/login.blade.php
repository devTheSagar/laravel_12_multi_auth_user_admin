<h1>admin login form</h1>
<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <input type="email" placeholder="email" name="email" required />
    <br><br>
    <input type="password" placeholder="password" name="password" required />
    <br><br>
    <button type="submit">Login</button>
</form>