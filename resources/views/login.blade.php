<html>
<h1>
    Login
</h1>
<form method="POST" action="{{ url('/login')  }}">
    <label>EMAIL</label><input type="text" name="email"><br>
    <label>PASS</label><input type="text" name="password"><br>
    <input type="submit">
    @csrf
</form>

</html>